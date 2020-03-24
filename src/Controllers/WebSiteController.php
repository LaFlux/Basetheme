<?php
namespace ExtensionsValley\Basetheme;
use ExtensionsValley\Basetheme\Helpers\ThemeHelper;
use ExtensionsValley\Pages\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WebSiteController extends Controller {

	protected $themHelper;

	public function __construct(ThemeHelper $themehelper) {
		$this->themeHelper = with(new $themehelper);
	}

	public function getIndex() {

		$title = 'Home';
		$themeHelper = $this->themeHelper;
		$page = Pages::Where('slug', 'home')->Where('status', 1)->WhereNull('deleted_at')->first();
		return \View::make("$themeHelper->theme_name::default.index",
			compact('title', 'themeHelper', 'page'));
	}

	public function SubmitContactform(Request $request) {

		$data['message'] = strip_tags($request->input('message'));
		$data['subject'] = $request->input('subject');
		$data['name'] = $request->input('first_name') . ' ' . $request->input('last_name');
		$data['email'] = $request->input('email');

		$this->sendMail($data);
		return back()->with(['message' => "Thank you for contact us. We will get back to you soon"]);
	}

	public function sendMail($data) {

		$themeHelper = $this->themeHelper;
		\Mail::queue("$themeHelper->theme_name::email.contact", compact('data'), function ($mail) use ($data) {
			$mail->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
				->subject(\WebConf::get('site_name') . ': Contact Request ');
		});

	}

}

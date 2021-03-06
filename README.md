# Basetheme for Laflux

Laflux is a Hybrid Platform built with Laravel 5.3. This is the Base theme for Laflux.

## Getting Started

Basetheme is used as the default front end theme for Laflux platform.Click here for the [Demo](http://demo.laflux.com/).

### Prerequisites

Laflux platform : http://www.github.com/Laflux/Laflux. Checkout the demo of Laflux: [Front end demo](http://demo.laflux.com/), [Back end demo](http://demo.laflux.com/admin/dashboard)

### Installing

The Laflux platform ships with the Basetheme.However, you can install this theme separately via two methods.

1.) Download the component as zip and upload directly into the system via Laflux Extension manager component.

2.) Manual Installation (Via git clone)

Clone the repository in to the Directory, root directory/packages/ExtensionsValley/ . After cloning, run the following commands.

```
php artisan vendor:publish 
php artisan migrate
composer dumpautoload -o
```

If you add this repository as a submodule, you can automatically update the repository, whenever there is a new update.To add this repository as a submodule, go to the root directory of Laflux and run the following command:

```
git submodule add https://github.com/LaFlux/Basetheme.git packages/ExtensionsValley/Basetheme/

php artisan vendor:publish 
composer dumpautoload -o
```

## Deployment

This Basetheme is completely ready for deployment. Installation is all you have to do.

## Built With

* [LARAVEL](https://laravel.com/) - The web framework used
* [COMPOSER](https://getcomposer.org/) - Dependency Management

## Authors

* **Jobin Jose** - *Initial work* - [Jobin Jose](https://github.com/Jobinjose01)
* **Jinto Antony** - *Initial work* - [Jinto Antony](https://github.com/JintoAntony)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Laflux platform Documentation - [Documentation](http://docs.laflux.com/)
* Updates - Pull this repository for latest updates
* Premium Version of Laflux - [Premium Version](http://extensionsvalley.com/downloads/laravel-admin-dashboard/)

### Premium Version features:
* 100% Upgrade Guaranteed
* Laravel 5.2 or 5.3 to Kick Start
* User Management
* User Groups Management
* Powerful Access Control Logic (ACL)
* Inbuilt Data Tables Support
* Easy CRUD Management
* Extension Manager for integrating many packages
* Data Export options for all Tables
* Rapid Customization Options
* Full Admin Theme
* Clean and Professional UI
* Inbuilt CSS3, HTML5, Bootstrap Support
* Free Lifetime Updates
* Comparable with All-Modern-Browsers
* Multiple Icon Fonts
* Retina-Ready Design
* etc.



# CodeIgniter 4
Learning belajar Codeigniter 4:
codeigniter 4 atau yang biasa sering di namakan ci4 adalah salah satu framework php yang menggunkan konsep mvc dan oop, framework ci4 bersifat opensource yang di gunakan untuk membangun aplikasi web dinamis.
ci4 adalah versi terbaru dari ci3 dimana didalam ci4 banyak fitur - fitur baru yang di sediakan dalam ci4. ci salah satu framework unggulan dari php selain ringan documentasinya juga banyak, apalagi di bagi kita orang indonesia pasti sering bingung ketika mempelajari bahasa pemograman yang dimana documentasinya sedikit dan juga berbahasa inggris pasti bingung kan. untuk ci sendiri di indonesia adalah salah satu framework unggulan yang dimana banyak digunakan oleh developer untuk mengembangkan atau membuat sebuah aplikasi. selain itu ci sangat cocok pagi para programer pemula apalagi dengan menggunkan laptop kentang seperti saya ini, ci sangat ringan dan juga cepat adalah pilihan yang tepat untuk mempelajari bahasa pemograman yang menggunakan framework.
# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible, and secure. 
More information can be found at the [official site](http://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the 
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/). 

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!
The user guide updating and deployment is a bit awkward at the moment, but we are working on it!

## Repository Management

We use Github issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script. 
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)


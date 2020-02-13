# About This Project

This project demonstrates how to use Vue.js javascript framework and Tailwind CSS framework in laravel framework. It is created by following instructions in laracasts lesson [modern-css-for-backend-developers](https://laracasts.com/series/modern-css-for-backend-developers/episodes/7?autoplay=true). However, because this lesson was published two years ago in 2018, if you follow exactly the way in lesson video, it won't work, there are some issues need to be fixed. I'll describe below how I figured out to setup everything to implement that FAQ page.

## Development environment/tools
- OS: Windows 10
- Web server: Apache v2.4.41
- Database: MySQL v8.0.18
- Editor: Visual Studio Code v1.42.0
- Version Control and Code repository: [Git for Windows v2.25.0.windows.1](https://git-scm.com/download/win) and [Github](http://github.com)
- Programming language: [PHP v7.4.0](https://www.php.net/downloads.php)
- [Wampserver64 v3.2.0](http://www.wampserver.com/en/download-wampserver-64bits/). My computer is a HP laptop running Windows 10, so I choose Wampserver which can easily install Apache and MySQL on it and start/stop running environment for my software.
- [Laravel Framework v6.14.0](https://laravel.com/docs/6.x). To install Laravel, you need to install [Composer v1.9.3](https://getcomposer.org/download/) first. Then run below command to install laravel:
```
    > composer global require laravel/installer
```
- [npm v6.13.4](https://www.npmjs.com/get-npm). It will be used to install dependencies (node_modules) required by laravel, Vue and CSS. npm is distributed with Node.js- which means that when you download Node.js, you automatically get npm installed on your computer.
- [Vue.js 2.5.17](https://vuejs.org/v2/guide/installation.html#NPM). A popular **javaScript** framework.
- [tailwindcss 1.2.0](https://tailwindcss.com/docs/installation). A utility-first **CSS** framework. We are going to use Laravel Mix and Sass with TailwindCSS.

## How to create the project framework?

### Step 1: Create laravel project structure
Assume you've successfully installed PHP, Wampserver, laravel and npm.
```
    // create new laravel project folder 'faq-page' and already installed laravel's dependencies 
    > laravel new faq-page
    // install dependencies
    > cd faq-page
    > npm install
```
### Step 2: Install Vue
Since Composer package already provides Vue, so we just go ahead to install it into my project. Change to project directory and run:
```
    > composer require laravel/ui --dev
```
It will change composer.json file under project directory to add related configuration. Then run:
```
    > php artisan ui vue
```
This will make below changes under project directory:
* package.json
* webpack.mix.js
* /resources/js/app.js
* /resources/js/bootstrap.js //This project won't use it
* /resources/sass/_variables.scss //a sass partial
* /resources/sass/app.scss
* a new folder'components' under '/resources' folder, in which there is a Vue component 'ExampleComponent.Vue'
Then we need to run:
```
    > npm install
```

## Which files I changed and what changed before implementing this FAQ feature?

Note, after you clone this repository, you need to run 'npm install' to install 'node_modules' and 'composer install' to install 'vendor' dependencies. Also change '.env.example' to '.env' and make necessary changes to it.

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

## How to setup code structure of this project?

### Step 1: Create laravel project structure
Assume you've successfully installed PHP, Wampserver, laravel and npm.
```
    // create new laravel project folder 'faq-page' and already installed laravel's dependencies 
    > laravel new faq-page
    // install related dependencies
    > cd faq-page
    > npm install
```
### Step 2: Install Vue
1. Since Composer package already provides Vue, so we just go ahead to install it into my project. Change to project directory and run:
```
    > composer require laravel/ui --dev
```
It will change composer.json file under project directory to add related configuration. 
2. Then run:
```
    > php artisan ui vue
```
This generate basic scaffolding of Vue in project directory:
* package.json
* webpack.mix.js
* /resources/js/app.js
* /resources/js/bootstrap.js //This project won't use it
* /resources/sass/_variables.scss //a sass partial
* /resources/sass/app.scss
* a new folder'components' under '/resources' folder, in which there is a Vue component 'ExampleComponent.Vue'. Any new Vue components can be put into this folder. And new Vue components need to be registered in file "/resources/js/app.js", like this:
```
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('question', require('./components/Question.vue').default); // new Vue component generated in this project
```
Note, anytime a Vue component is changed, should run "npm run dev" to rebuild the resources.
3. Then run "npm install" to install related related dependencies. Normally, I also run "npm run dev" to rebuild assets.
### Step 3: Install Tailwind CSS framework
```
    > npm install tailwindcss
```
This will make below changes in project folder:
- Add tailwindcss dependency into package.json
- Add *app.css* into "/public/css" folder
- Add *app.js* into "/public/js" folder
- Add a *mix-manifest.json* file into "/public" folder.
### Step 4: Config Tailwind in project
1. Make changes to "C:\wamp64\www\faqPage\resources\sass\app.scss"
Replace
```
// Fonts
@import url('https://fonts.googleapis.com/css?family=Nunito');
// Variables
@import 'variables';
// Bootstrap
@import '~bootstrap/scss/bootstrap';
```
by this:
```
@tailwind base;
@tailwind components;
@tailwind utilities;
``` 
2. Generate tailwind config file
run
```
    > npx tailwindcss init
```
3. Include Tailwind in Laravel Mix build Process
Open the *webpack.mix.js* file, changes:
```
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
```
to
```
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
      processCssUrls: false,
      postCss: [ tailwindcss('tailwind.config.js') ],
});
```
This changes tell Laravel Mix(which internally uses webpack) to compile tailwind sass using the tailwind configuration file.
4. run 'npm install and npm run dev' again

## Key files in this project
1. app\Question.php - Eloquest ORM model
2. app\Http\Controllers\QuestionController.php - Resource Controller
3. resources\js\components\Question.vue - A Vue component uses Tailwind CSS framework
4. resources\views\faq.blade.php - Blade view component
5. resources\views\layout.blade.php - Blade view layout

## Reproduce this project on your computer
1. Since git won't add "node_modules" and "vendors" folders into repository, after you clone this project, you need to run 'npm install' to install 'node_modules' and 'composer install' to install 'vendor' dependencies. 
2. The '.env' file is also not included in this repository. Also change '.env.example' to '.env' and make necessary changes to it.

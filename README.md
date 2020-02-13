# About this project

This project demonstrates how to use Vue.js javascript framework and Tailwind CSS framework in laravel framework. It is created by following laracasts lesson [modern-css-for-backend-developers](https://laracasts.com/series/modern-css-for-backend-developers/episodes/7?autoplay=true). However, because that lesson was published in 2018, if you follow exactly the way in lesson video, it won't work. I'll describe below how I figured out to setup everything to implement that FAQ page.

## Development environment/tools
- OS: Windows 10
- Web server: Apache v2.4.41
- MySQL v8.0.18
- Editor: Visual Studio Code v1.42.0
- [PHP v7.4.0](https://www.php.net/downloads.php)
- [Wampserver64 v3.2.0](http://www.wampserver.com/en/download-wampserver-64bits/). My computer is a HP laptop running Windows 10, so I choose Wampserver which can easily install Apache and MySQL on it and start/stop running environment for my software.
- [Laravel Framework v6.14.0](https://laravel.com/docs/6.x). To install Laravel, you need to install [Composer v1.9.3](https://getcomposer.org/download/) first. Then run below command to install laravel:
```
    > composer global require laravel/installer
```
- [npm v6.13.4](https://www.npmjs.com/get-npm). It will be used to install below two frontend frameworks. npm is distributed with Node.js- which means that when you download Node.js, you automatically get npm installed on your computer.
    - [Vue.js 2.5.17](https://vuejs.org/v2/guide/installation.html#NPM). A popular javaScript framework.
    - [tailwindcss 1.2.0](https://tailwindcss.com/docs/installation). A utility-first CSS framework. We are going to use Laravel Mix and Sass with TailwindCSS.

## How to create the project framework?

### Step 1: Create laravel project structure
Assume you've successfully installed PHP, Wampserver, laravel and npm.
```
    // create new laravel project folder 'faq-page' and already installed laravel's dependencies 
    > laravel new faq-page
    // install Vue.js
    > cd faq-page
    > npm install vue
```
### Step 2: 

## Which files I changed and what changed before implementing this FAQ feature?

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

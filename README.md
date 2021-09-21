<p align="center">
  <h3 align="center">Coding Challenge Charging Management System</h3>
</p>

<!-- ABOUT THE PROJECT -->
## About The Project
All necessary functionalities have been performed in this CSMS project. As for the project itself, the requested API was created which sent a request and response for the desired content. The Postman allows us to build, test, and modify the API. On the backend, a connection to the database was created, and on the frontend, I decided to do certain functionalities due to the non-complexity of the data where I wanted to show my logical side for this system.


### Built With

The technologies I used for this project are PHP framework Laravel, the database was MySQL and on the frontend Vue.js and Bootstrap.

* [Vue.js](https://vuejs.org/)
* [Bootstrap](https://getbootstrap.com)
* [Laravel](https://laravel.com)
* [MySql](https://www.mysql.com/)


## Getting Started
Here I will show an example of how I run the project each time and below are the installations for the given project.
### Prerequisites(running)
Examples of how to list things you need to run the system and how to install them.
* php
  ```sh
  php artisan serve
  ```
* npm
  ```sh
  npm run watch
  ```
### Installation
I will show all installation here:

- Creating project with composer
   ```sh
   composer create-project laravel/laravel csms
   ```
- Create model and migrate to database
   ```sh
   php artisan make:model Rate --migration 
   ```
- Migrate to database
   ```sh
   php artisan migrate 
   ```
- Create controller
   ```sh
   php artisan make:controller RateController --api 
   ```
- Mix loops installing additional dependencies
   ```sh
   npm install vue-template-compiler vue-loader@^15.9.7 --save-dev --legacy-peer-deps
   ```
- Install vue loader
   ```sh
   npm i vue-loader 
   ``` 
- Install vue
   ```sh
   npm install vue 
   ```   
- Install cross-env
   ```sh
   npm install cross-env 
   ```
- Install vue axios
   ```sh
   npm install --save axios vue-axios
   ```   
- Install vue router
   ```sh
   npm install --save vue-router  
   ```

<!-- USAGE EXAMPLES -->
## Usage
This space will be used to show useful examples of how a project can be used. Additional screenshots and code examples.

--HOME PAGE--

On the Home Page I was create a navbar with page links (Home,Rating). There is also a small jumbotron with title, paragraph and button,when you click on this button(Coding Challenge Result) then redirect to Rating Page. Thas all about this Home Page.

-link of the picture --> https://github.com/bakir1/csms/blob/master/screenshots/home_page.JPG 
 
 --RATING PAGE--

On the Rating Page I was create a two tables(Charging Process and Charging Process Rating), Charging Process table show all data given in this process(code challenge).All this date showed from database. Second table Charging Process Rating show all information which is calculated and give the result of that calculation.

-link of the picture --> https://github.com/bakir1/csms/blob/master/screenshots/rate_page.JPG
 
 --MySQL DB --(table: rates)

Showing all rows and columns of ordering data.

 -link of the picture --> https://github.com/bakir1/csms/blob/master/screenshots/rate_page.JPG
 
 
## Coding Challenge 2
Suggest improvements to the API design.

My suggestion to API design:

Insted: "rate": { "energy": 0.3, "time": 2, "transaction": 1 }, put this data values in rate_id

change: "rate_id": { (rate_id) },

Input
{
 
 "rate_id": { (rate_id) },
 
 "cdr": { "meterStart": 1204307, "timestampStart": "2021-04-05T10:04:00Z", "meterStop": 1215230, "timestampStop":
"2021-04-05T11:27:00Z" }
}

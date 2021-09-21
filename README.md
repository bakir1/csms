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
In this space will be used to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. 





<!-- ROADMAP -->
## Roadmap

See the [open issues](https://github.com/othneildrew/Best-README-Template/issues) for a list of proposed features (and known issues).



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.



<!-- CONTACT -->
## Contact

Your Name - [@your_twitter](https://twitter.com/your_username) - email@example.com

Project Link: [https://github.com/your_username/repo_name](https://github.com/your_username/repo_name)



<!-- ACKNOWLEDGEMENTS -->
## Acknowledgements
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Img Shields](https://shields.io)
* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Pages](https://pages.github.com)
* [Animate.css](https://daneden.github.io/animate.css)
* [Loaders.css](https://connoratherton.com/loaders)
* [Slick Carousel](https://kenwheeler.github.io/slick)
* [Smooth Scroll](https://github.com/cferdinandi/smooth-scroll)
* [Sticky Kit](http://leafo.net/sticky-kit)
* [JVectorMap](http://jvectormap.com)
* [Font Awesome](https://fontawesome.com)





<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png

# ReadersMatch

ReadersMatch is a book exchange marketplace for everyone, regardless of their limitations. It makes it easier to meet up with people that enjoy this wonderful hobby thanks to its simple, yet effective design that allows contacting the owner of your favorite books with just a few clicks. The website offers multiple accesibility features for those who need an extra help navigating through the application and it is designed for use on mobile devices in mind.

## ⭐ Characteristics

* __A Homepage that shows all available books at the moment.__

* __A filter which allows to search for specific books according to your preferences.__

* __Select a book to see its details, including the owner's contact info.__ 

* __Mark your favorite books and be able to check them in a personal list.__

## 📦 How to Install

### Prerequisites:

* __PHP language version 8.2 or above:__ https://www.php.net/downloads.php.

* __MySQL Database:__ https://dev.mysql.com/downloads/.

* __Composer dependency manager for PHP:__ https://getcomposer.org/.

* __Node.js latest stable version:__ https://nodejs.org/en.

### Installation Steps

1. Clone the repo:

```
git clone https://github.com/Equipo-3-Hackaton-Globant/ReadersMatch.git
```

2. Inside the cloned repository, install the required dependencies:

```
composer install && npm install
```

3. Copy `.env.example` and create a new file called `.env`:

```
cp .env.example .env
```

4. Generate a new key for laravel:

```
php artisan key:generate
```

5. Check that the MySQL service is running and then migrate the database by running the command below:

```
php artisan migrate
```

Once you've done all the previous steps finally you can initialize the server and start using the application:

```
npm run build && composer run dev --timeout 1000000
```

## 🛠️ Languages and Tools Used

### Front End:

[![Front End Stack](https://skillicons.dev/icons?i=js,html,css,bootstrap,react)](https://skillicons.dev)

### Back End:

[![Back End Stack](https://skillicons.dev/icons?i=laravel,php,mysql,nodejs,vite)](https://skillicons.dev)

## 👥 Authors

* __[Alberto Hernandez Galeote](https://github.com/TOKIO-V2).__

* __[Mariuxi Olaya Ruiz](https://github.com/catmaluci).__

* __[Sergio Jorquera Gimeno](https://github.com/sergio-jorquera).__

* __[Olena Myroshnykova](https://github.com/OlenaMyroshnykova).__

* __[Diego Santamaria](https://github.com/DinGo21).__

* __[Layla Gómez Vallejos](https://github.com/LayGomez).__

* __[María Ayelén Marcos Nacht](https://github.com/Ayuik).__

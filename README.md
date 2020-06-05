# Full Stack Web Developer Starter
Use this project to bootstrap the Full Stack Web Developer exercise.  It includes:
* Laravel 6
* Vue
* Laravel Mix / hot reloading
* bootstrap css

## Docker Services
The `docker-compose.yml` file includes all the required services: PHP, Redis, MySQL, Ngnix (except Node)
* Install Docker or [Docker Desktop for Mac](https://hub.docker.com/editions/community/docker-ce-desktop-mac)
* Run `docker-compose up -d` on the project root folder to get PHP up and running
    * This will build the docker image for PHP
* Run `docker-compose ps` to make sure the state is `Up` for all services

## NodeJS
Node is required to run the front-end portion of the project. A quick way to toggle between node versions is to use NVM.

Install NVM on Mac using [Brew](https://brew.sh/)
```
brew update
brew upgrade
brew install nvm
nvm install 12.16.1
nvm alias default 12.16.1
```

**Note**: If you already have Node installed, it *should* be fine as long as it is version 12.x

## Installing Dependencies
### PHP
Because PHP is running in Docker, use the following commands to install dependencies.  You can verify PHP is running via `docker-compose ps`.
```
docker-compose exec php composer install
```

**Note**: If you already have PHP installed, it *should* be fine as long as it is version 7.3.x

### JavaScript
After installing NVM and Node, running `nvm use` on project root will select the Node version for the project.  Then install dependencies with NPM.
```
nvm use
npm install
```

**Note**: If you get errors related to node-gyp, please make sure you have xcode command line tools installed.  EX: `xcode-select --install`

## Running the Project
After installing both the PHP and JavaScript dependencies and all Docker services are running, start the project.

#### 1. Make a copy of the environment file example. From the project root run
```
cp .env.example .env
```

#### 2. Then generate an APP_KEY
```
docker-compose exec php php artisan key:generate
```

#### 3. Run the project!
This will enable hot module replacement for scss and js, but will not automatically open up your browser.
```
npm run hot
```

#### 4. Open up your browser and go to 
```
http://localhost
```

and you should see

![Homepage Image](/public/img/comment-system.png?raw=true)

## Artisan Commands
Artisan commands can be run from the Docker container with `docker-compose exec CONTAINER COMMAND`.
 * EX: creating a model: `docker-compose exec php php artisan make:model Models/Comment --migration`
 * Running migrations: `docker-compose exec php php artisan migrate`

## Quick File Locations
* Add any JavaScript to `resources/js`
* Add any SCSS to `resources/sass`
* Add any HTML (blade templates) to `resources/views`
* Feel free to add controllers to `app/Http/Controllers` or closure functions in `routes/web.php`, either is fine


### Additional Docs
* [Laravel](https://laravel.com/docs)



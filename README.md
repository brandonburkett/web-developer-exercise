# Full Stack Web Developer Starter
Use this project as to bootstrap the Full Stack Web Developer exercise.

## Docker Services
The `docker-compose.yml` file has all services ready to go (PHP, Redis, MySQL, Ngnix)
* Install Docker or [Docker Desktop for Mac](https://hub.docker.com/editions/community/docker-ce-desktop-mac)
* Run `docker-compose up -d` on the project root folder to get PHP up and running
    * This will build the docker image for PHP
* Run `docker-compose ps` to make sure the state is `Up` for all services

## Non Docker Services
Node is required to run the front-end portion of the project. A quick way to toggle between node versions is to use NVM.

On Mac using [Brew](https://brew.sh/)
```
brew update
brew upgrade
brew install nvm
nvm install 12.16.1
nvm alias default 12.16.1
```

## Dependencies
### PHP
Because PHP is in docker, run the following command to install dependencies.  Make sure PHP is running via `docker-compose ps`.
```
docker-compose exec php composer install
```

Then generate an APP_KEY
```$xslt
php artisan key:generate
```

### JavaScript
After install NVM and node 12.16.1, running `nvm use` on project root will select the Node version for the project.  Then install dependencies with NPM.
```
npm install
```

## Running the Project
After install both the PHP and JavaScript dependencies and all Docker services are running, start the project.
```
npm run hot
```
This will enable hot module replacement for scss and js.

## Artisan Commands
Artisan commands can be run from the Docker container with `docker-compose exec CONTAINER COMMAND`.
 * EX: creating a model: `docker-compose exec php php artisan make:model Models/Comment --migration`
 * running migrations: 

## File Locations
* Add any JavaScript to `resources/js`
* Add any SCSS to `resources/sass`
* Add any HTML (blade templates) to `resources/views`
* Feel free to add controllers to `app/Http/Controllers` or closure functions in `routes/web.php`, either is fine


### Additional Docs
* [Laravel](https://laravel.com/docs)



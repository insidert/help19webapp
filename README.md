# Help19 Web App

This is a [Laravel](https://laravel.com) based web app to provide an interface for people to add and search covid-19 help resources.

## Project goals and focus

- Provide an interface to add services like oxygen suppliers, food delivery, hospital beds etc.
- Publish the feature first. Worry about design principles and patterns later.

## Adding improvements

Please [add an issue](https://github.com/insidert/help19webapp/issues/new) before making any changes to the web app. Or [join our WhatsApp group](https://chat.whatsapp.com/LxfqvOTFQMSAdzG2fOAJvL) to discuss further.

## Installation guide

- Clone the repo.
- Install dependencies ```composer install```
- Update database credentials on *.env* file.
- Migrate tables ```php artisan migrate```
- Seed database ```php artisan db:seed``` for testing the services.
- If you are familiar with database seeding, find the seeders in the *database > seeders* folder and them individually.

## Implementation

- A tag is created first. Each tag is given a name and type.
- The tag type is used to group tags.
- A service is created and the tags are attached.

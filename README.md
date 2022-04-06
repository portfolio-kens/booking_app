# booking_app

## Download

git clone

git clone https://github.com/portfolio-kens/booking_app.git

Download with unique name of branch

git clone -b unique name of branch https://github.com/portfolio-kens/booking_app.git

or

Download with zipfile

## Install

cd booking_app
composer install
npm install
npm run dev

Copy .env.example and then make .env file

Adjust following parts at .env file with your environment

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=booking
DB_USERNAME=user
DB_PASSWORD=password

In this case,you can use Docker.
After running Docker, exectute following command.

alias sail="./vendor/bin/sail"

sail artisan migrate:fresh --seed

If it makes DBtable and dummy data, it is successful.

Lastly

execute following command to make key and launch server

sail artisan key:generate

sail artisan serve

Then you can check display.








# Vu-Digital
new project for eccommerce website

# how to use
`composer update`

`npm install`

`npm run dev`

# migrate database
copy .env file from env.example and generate new key

`cp .env.example .env`

`php artisan key:generate`

`php artisan migrate`

`php artisan tinker`

`factory(\App\User::class)->create()`

login with faker email, password: secret
# run server
`php artisan serv`

server will run at http://127.0.0.1:8000

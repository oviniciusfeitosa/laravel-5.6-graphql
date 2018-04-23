# laravel-5.6-graphql

### Steps 

- ```npm install```
- ```npm run development```
- ```php artisan migrate:fresh```
- ```php artisan serve```
- Access ```http://localhost:8000/graphiql```

Example of mutation:
```
    mutation {
    createUser (
        name: "Vinicius",
        email: "viniciusfesil@gmail.com"
        password: "123eja"
    ) {
        id
        email
    }
    }
```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

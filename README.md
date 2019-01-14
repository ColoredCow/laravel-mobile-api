# Laravel Mobile API

# Prerequisite

This package will use laravel passport [https://laravel.com/docs/5.6/passport]


## Installation

1. Add this package in your project.
```sh
composer require coloredcow/laravel-mobile-api
```

2. Now add the trait `CanHaveAPIEndPoints` in the controller who will contribute in the mobile service. You can also add this trait in the base controller and use it. Now you can use **returnFormattedResponse** method to send the response. This function will check the request and send the reponse accordingly.

If first argument is an array and second argument is a string then for web return the html repose for that view and data. 

```php
return $this->returnFormattedResponse(['projects' => $projects], 'project.index');

```

If you want to send custom respose for both API and web then you can pass the closures also. 

```php
return $this->returnFormattedResponse(
    function (){
       // for api
    },
    
    function (){
       // for web
    }
);
```

## Exception Handling 

For clear error responses you need to add the trait in the **App\Exceptions\Handler** class and add the following code snippt in report method. 

```php
    public function render($request, Exception $exception)
    {
        if($this->isApi()) {
            return $this->renderErrorResponseForAPI($exception);
        }
        
        return parent::render($request, $exception);
    }
    
```


## Auth Middleware

If you want to set the auth user for every authenticated route then add RestApiMiddleware in your project and apply in on routes. 

In kernel.php
```php
'restapi' => [
    \ColoredCow\LaravelMobileAPI\RestAPIMiddleware::class,
]
```

In routes file 
```php
Route::middleware(['auth:api', 'restapi:auth'], function(){
	// routes
});
```

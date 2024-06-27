protected $routeMiddleware = [
    // ...
    'checkAssociationIsValid' => \App\Http\Middleware\CheckAssociationIsValid::class,
];
protected $routeMiddleware = [
    // ...
    'checkAssociationIsValid' => \App\Http\Middleware\CheckAssociationIsValid::class,
    <!-- 'storeEventId' => \App\Http\Middleware\StoreEventId::class, -->
];

protected $routeMiddleware = [
    // ...
    'checkAssociationIsValid' => \App\Http\Middleware\CheckAssociationIsValid::class,
    'admin' => \App\Http\Middleware\AdminMiddleware::class,

    <!-- 'storeEventId' => \App\Http\Middleware\StoreEventId::class, -->
];
protected $middlewareGroups = [
    'CheckRole' => [
      \App\Http\Middleware\CheckRole::class,
      \Illuminate\Auth\Middleware\Authenticate::class,
],
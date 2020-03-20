<?php
/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\DeckPlus\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
return [
    'resources' => [
        'note' => ['url' => '/notes']
    ],
    'routes' => [
	   ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
       ['name' => 'page#do_echo', 'url' => '/echo', 'verb' => 'POST'],
    ]
];

/* 
return [
    'routes' => [
	   ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
       ['name' => 'page#do_echo', 'url' => '/echo', 'verb' => 'POST'],
       ['name' => 'note#index', 'url' => '/notes', 'verb' => 'GET'],
       ['name' => 'note#show', 'url' => '/notes/{id}', 'verb' => 'GET'],
       ['name' => 'note#create', 'url' => '/notes', 'verb' => 'POST'],
       ['name' => 'note#update', 'url' => '/notes/{id}', 'verb' => 'PUT'],
       ['name' => 'note#destroy', 'url' => '/notes/{id}', 'verb' => 'DELETE']
    ]
]; */
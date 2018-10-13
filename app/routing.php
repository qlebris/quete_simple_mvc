<?php
// routing.php

$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['add', '/item/add', ['GET','POST'],],
        ['show', '/item/{id}', 'GET'],// action, url, HTTP method
        ['edit', '/item/edit/{id}', ['GET', 'POST']],// action, url, HTTP method
        ['delete', '/item/delete/{id}', 'GET'],// action, url, HTTP method
    ],
    'Category' => [ //Controller
        ['index', '/categories', ['GET','POST']],
        ['add', '/category/add', ['GET','POST'],],
        ['show', '/category/{id}', 'GET'],
        ['edit', '/category/edit/{id}', ['GET', 'POST']],
        ['delete', '/category/delete/{id}', 'GET'],
    ],
];
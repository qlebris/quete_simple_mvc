<?php
// routing.php

$routes = [
    'Item' => [ // Controller
        ['index', '/items', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],
    'Category' => [ //Controller
        ['index', '/categories', 'GET'],
        ['show', '/category/{id}', 'GET'],
    ],
];
<?php
// https://www.freecodecamp.org/news/how-to-build-a-routing-system-in-php/

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/../views/';

//dump requestt_uri for debugging
header("X-request: " . $request);

switch ($request) {
    case '/singlefile':
    case '/singlefile/':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/singlefile/views/users':
        require __DIR__ . $viewDir . 'users.php';
        break;

    case '/singlefile/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}

<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
get('/', 'pages/index.php');
get('/blogs', 'pages/blogs.php');
get('/blog/$id', 'templates/blog.php');
any('/404','templates/404.php');
<?php

/* Include the CDN Helper. */
require(__DIR__.'/Helper/cdn.php');

/**
 * Register Exception Handler and Error Handler
 */
$client = new Raven_Client(Config::get('raven.url'));

App::instance('raven', $client);

$error_handler = new Raven_ErrorHandler($client);
$error_handler->registerExceptionHandler();
$error_handler->registerErrorHandler();

/**
 * Share a default title across all views. This can be overriden within
 * the controller action.
 */
View::share('title', 'PHP Backend Web Developer based in Yorkshire working with PHP Frameworks!');

/**
 * Share a default description across all views. This can be overriden within
 * the controller action.
 */
View::share('description', 'Articles about web development, PHP and modern technologies.');

/**
 * Bind the article repository within the container.
 */
App::instance('blog', new Website\Repository\ArticleRepository());

/**
 * Show an XML sitemap of all articles.
 */
Route::get('/sitemap.xml', array(
    'as'    => 'sitemap',
    'uses'  => 'Website\Controller\BlogController@showSitemap'
));

/**
 * Show an RSS feed of all articles.
 */
Route::get('/rss.xml', array(
    'as'    => 'rss',
    'uses'  => 'Website\Controller\BlogController@showRss'
));

/**
 * Show the index of all blog posts.
 */
Route::get('/', array(
    'as'    => 'index',
    'uses'  => 'Website\Controller\BlogController@showIndex'
));

/**
 * Show the about me page.
 */
Route::get('/about', array(
    'as'    => 'about',
    'uses'  => 'Website\Controller\PageController@showAbout'
));

/**
 * Show a 404 page.
 */
Route::get('/404', array(
    'as'    => '404',
    'uses'  => 'Website\Controller\PageController@showFour'
));

/**
 * Show a single blog article.
 */
Route::get('/{slug}', array(
    'as'    => 'article',
    'uses'  => 'Website\Controller\BlogController@showArticle'
));

<?php
/**
 * ownCloud - owntweetly
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author ELExG <elexgspot@gmail.com>
 * @copyright ELExG 2016
 */

/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\OwnTweetly\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */

return [
    'resources' => [
        'owntweetly' => ['url' => '/owntweetly']
    ],
    'routes' => [
    ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
    ['name' => 'page#returnJSON', 'url' => '/json', 'verb' => 'GET'],
    ['name' => 'page#searchTweets', 'url' => '/search', 'verb' => 'GET'],
    ['name' => 'page#createTweet', 'url' => '/add', 'verb' => 'POST'],
        ]
];
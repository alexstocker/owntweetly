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

namespace OCA\OwnTweetly\Controller;

use Abraham\TwitterOAuth\TwitterOAuth;
use OCP\IRequest;
use OCP\AppFramework\Http;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\Http\JSONResponse;
use OCP\AppFramework\Controller;
use OCP\IUserSession;

use OCA\OwnTweetly\Db\authApi;
use OCA\OwnTweetly\Db\authApiMapper;

class PageController extends Controller {

    private $mapper;
    private $userId;
    private $keys;

	public function __construct($AppName, IRequest $request, $UserId, IUserSession $userSession, authApiMapper $mapper){
		parent::__construct($AppName, $request);
		$this->userId = $UserId;
        $this->mapper = $mapper;
	}

	/**
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function index() {
		$params = ['user' => $this->userId,'keys' => $this->getApiKeys()];
		return new TemplateResponse('owntweetly', 'main', $params);  // templates/main.php
	}
	/**
	* @NoAdminRequired
	 * */

    function getApiKeys(){
        $this->keys = $this->mapper->find($this->userId);
        return $this->keys;
    }

	public function returnJSON() {
		try {
            $r = $this->getApiKeys();
			$connection = new TwitterOAuth($r['apikey'], $r['apisec'], $r['accesstoken'], $r['acesstokenkey']);
            $statuses = $connection->get("search/tweets", ["q" => "html5live", "count" => 10]);
            return new JSONResponse($statuses);
		} catch (NotFoundException $ex) {
			return new JSONResponse(array(), Http::STATUS_NOT_FOUND);
		}

	}

	/**
	 * Post a tweet
	 * @NoAdminRequired
	 * TODO: add create/post tweet
	 */

	public function createTweet(){

	}

	/**
	 * Search tweets
	 * @NoAdminRequired
	  * TODO: add search tweets by hash or whatever
	 */
	public function searchTweets() {

	}

}
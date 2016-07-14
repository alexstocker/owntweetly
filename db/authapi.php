<?php
/**
 * Created by PhpStorm.
 * User: elex
 * Date: 13.07.16
 * Time: 15:48
 */

namespace OCA\OwnTweetly\Db;

use OCP\IDBConnection;
use OCP\IUserSession;
use OCP\AppFramework\Db\Entity;

class authApi extends Entity {

    //protected $userId;
    //protected $apikey;
    //protected $apisec;
    //protected $accesstoken;
   // protected $accesstokensec;

    public function __construct(IDBConnection $db,$UserId,IUserSession $userSession) {
        $this->db = $db;
        $this->userSession = $userSession;

    }
}
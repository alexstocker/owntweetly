<?php

namespace OCA\OwnTweetly\Db;

use OCP\IDBConnection;
use OCP\AppFramework\Db\Mapper;

class authApiMapper extends Mapper {

    public $row;

    public function __construct(IDBConnection $db) {
        parent::__construct($db, 'ownTweetly_authApi', '\OCA\OwnTweetly\Db\authApi');
    }


    /**
     * @throws \OCP\AppFramework\Db\DoesNotExistException if not found
     * @throws \OCP\AppFramework\Db\MultipleObjectsReturnedException if more than one result
     */

    public function find($userId) {
        $sql = 'SELECT * FROM *PREFIX*owntweetly_apikeys WHERE user_id = ?';
        $stmt = $this->execute($sql, [$userId]);
        $row = $stmt->fetch();
        $stmt->closeCursor();
        return $row;
    }

}
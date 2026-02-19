<?php

namespace AppKit\Database;

use AppKit\Client\AbstractClient;

class DatabaseClient extends AbstractClient implements DatabaseClientInterface {
    private $driver;

    function __construct($log, $driver) {
        parent::__construct($log -> withModule(static::class));

        $this -> driver = $driver;
    }

    public function prepare($query) {
        return $this -> getConnection() -> prepare($query);
    }

    public function query($query, $params = []) {
        return $this -> getConnection() -> query($query, $params);
    }

    public function beginTransaction() {
        return $this -> getConnection() -> beginTransaction();
    }

    protected function createConnection() {
        return $this -> driver -> createConnection();
    }
}

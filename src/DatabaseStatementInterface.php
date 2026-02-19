<?php

namespace AppKit\Database;

interface DatabaseStatementInterface {
    public const FETCH_ASSOC = 0;
    public const FETCH_NUM = 1;

    public function execute($params = []);
    public function fetch($mode = self::FETCH_ASSOC);
    public function fetchAll($mode = self::FETCH_ASSOC);
    public function rowCount();
}

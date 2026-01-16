<?php

namespace AppKit\Database;

interface DatabaseTransactionInterface extends DatabaseQueryInterface {
    public function commit();
    public function rollBack();
}

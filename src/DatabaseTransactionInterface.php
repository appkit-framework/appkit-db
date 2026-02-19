<?php

namespace AppKit\Database;

use AppKit\Database\Internal\DatabaseExecutorInterface;

interface DatabaseTransactionInterface extends DatabaseExecutorInterface {
    public function commit();
    public function rollBack();
}

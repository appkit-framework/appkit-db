<?php

namespace AppKit\Database\Internal;

interface DatabaseInterface extends DatabaseExecutorInterface {
    public function beginTransaction();
}

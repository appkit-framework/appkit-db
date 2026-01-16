<?php

namespace AppKit\Database;

interface DatabaseInterface extends DatabaseQueryInterface {
    public function beginTransaction();
}

<?php

namespace AppKit\Database;

interface DatabaseQueryInterface {
    public function prepare($query);
    public function query($query, $params = []);
}

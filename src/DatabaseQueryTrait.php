<?php

namespace AppKit\Database;

trait DatabaseQueryTrait {
    public function query($query, $params = []) {
        return $this -> prepare($query) -> execute($params);
    }
}

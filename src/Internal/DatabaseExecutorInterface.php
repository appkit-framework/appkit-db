<?php

namespace AppKit\Database\Internal;

interface DatabaseExecutorInterface {
    public function prepare($query);
    public function query($query, $params = []);
}

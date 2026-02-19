<?php

namespace AppKit\Database;

use AppKit\Database\Internal\DatabaseInterface;

use AppKit\Client\AbstractClientConnection;

abstract class AbstractDatabaseConnection
extends AbstractClientConnection implements DatabaseInterface {}

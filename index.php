<?php

$query = require "core/Bootstrap.php";

require Router::load("routes.php")->direct(Request::uri(), Request::method());

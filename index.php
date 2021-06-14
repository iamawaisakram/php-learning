<?php

$query = require "Bootstrap.php";

$tasks = $query->selectAll('todos');

require 'index.view.php';

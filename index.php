<?php

$query = require 'core/bootstrap.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';

<?php

use \App\Core\{App,QueryBuilder,Connection};

App::bind("config",require 'config.php');

App::bind("database",new QueryBuilder(Connection::make(App::get("config")["database"])));

<?php

require_once "controllers/model.controller.php";
require_once "controllers/users.controller.php";
require_once "controllers/bookings.controller.php";
require_once "controllers/groups.controller.php";
require_once "controllers/notice.controller.php";
require_once "controllers/rooms.controller.php";
require_once "controllers/ticker.controller.php";

require_once "models/bookings.model.php";
require_once "models/groups.model.php";
require_once "models/notice.model.php";
require_once "models/rooms.model.php";
require_once "models/ticker.model.php";

$model=new ControllerModel();
$model->ctrModel();
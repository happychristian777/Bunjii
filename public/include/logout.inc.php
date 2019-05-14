<?php

    require_once ("../../private/initialize.php");

    session_start();
    session_unset();
    session_destroy();
    redirect_to('../index/php');
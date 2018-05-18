<?php
header("Content-Type:text/html; charset=utf8");
 require "./framework/Framework.class.php";
 date_default_timezone_set("Asia/shanghai");
   $frame_name = new Framework;
   $frame_name->run();
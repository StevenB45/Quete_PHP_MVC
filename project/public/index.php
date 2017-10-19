<?php

require "../vendor/autoload.php";
require "../src/model/QuestManager.php";
require "../connect.php";

$req = new \project\model\QuestManager();
$res = $req->findAll();
var_dump($res);

<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '421260045799635',
  'app_secret'     => '50956801a22c373fd19185665fb28430',
  'default_graph_version'  => 'v2.10'
]);

?>
<?php

$id = intval($_GET['id']);
$link = "http://cshms3.airtel.tv/PLTV/88888888/224/".$id."index.m3u8";
/* Redirect browser */
header("Location: $id");
 
/* Make sure that code below does not get executed when we redirect. */
exit;
?>
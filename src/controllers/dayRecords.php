<?php
session_start();
requireValidSession();
loadModel('WorkingHours');
$date = (new Datetime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);
loadTemplateView('dayRecords', ['today' => $today]);
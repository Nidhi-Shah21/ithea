<?php

require_once '../includes/db.php';

$db = new DB;

$sql = 'SELECT * FROM `mail_data` ORDER BY `mail_data`.`id` DESC';
$data = $db->getData($sql);
echo json_encode($data);
exit;

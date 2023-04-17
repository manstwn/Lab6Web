<?php
require_once('../../class/Database.php');
require_once('../../class/Form.php');

$database = new Database();
$id = $_GET['id'];
$database->delete("tb_mahasiswa", "id=" . $id);
header('location: ../../home');
?>

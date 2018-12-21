<?php
session_start();

if (!isset($_POST['lang'])) {
    echo json_encode(false);
}
$_SESSION['lang'] = $_POST['lang'];
echo json_encode(true);

?>

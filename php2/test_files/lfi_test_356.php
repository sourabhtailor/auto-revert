<?php
// LFI test variation #356
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
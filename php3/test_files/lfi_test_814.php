<?php
// LFI test variation #814
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
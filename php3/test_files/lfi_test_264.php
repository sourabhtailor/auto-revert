<?php
// LFI test variation #264
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
<?php
// LFI test variation #280
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
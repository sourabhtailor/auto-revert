<?php
// LFI test variation #163
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
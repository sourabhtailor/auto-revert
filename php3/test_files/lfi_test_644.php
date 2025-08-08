<?php
// LFI test variation #644
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
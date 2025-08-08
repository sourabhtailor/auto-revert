<?php
// LFI test variation #882
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
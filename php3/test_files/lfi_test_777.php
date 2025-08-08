<?php
// LFI test variation #777
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
<?php
// LFI test variation #1181
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
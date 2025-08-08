<?php
// LFI test variation #181
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
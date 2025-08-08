<?php
// LFI test variation #284
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
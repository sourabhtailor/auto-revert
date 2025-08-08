<?php
// LFI test variation #708
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
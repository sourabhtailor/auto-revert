<?php
// LFI test variation #944
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
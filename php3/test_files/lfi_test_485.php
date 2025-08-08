<?php
// LFI test variation #485
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
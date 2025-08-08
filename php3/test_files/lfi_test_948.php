<?php
// LFI test variation #948
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
<?php
// LFI test variation #941
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
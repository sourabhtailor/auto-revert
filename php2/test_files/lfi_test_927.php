<?php
// LFI test variation #927
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
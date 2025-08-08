<?php
// LFI test variation #891
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
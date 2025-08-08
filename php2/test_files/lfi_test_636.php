<?php
// LFI test variation #636
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
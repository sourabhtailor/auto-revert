<?php
// LFI test variation #982
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
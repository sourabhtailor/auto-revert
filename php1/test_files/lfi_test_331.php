<?php
// LFI test variation #331
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
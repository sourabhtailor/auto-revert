<?php
// LFI test variation #489
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
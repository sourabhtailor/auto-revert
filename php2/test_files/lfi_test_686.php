<?php
// LFI test variation #686
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
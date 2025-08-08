<?php
// LFI test variation #912
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
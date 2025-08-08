<?php
// LFI test variation #788
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
<?php
// LFI test variation #842
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
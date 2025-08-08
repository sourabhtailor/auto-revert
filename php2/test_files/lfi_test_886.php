<?php
// LFI test variation #886
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
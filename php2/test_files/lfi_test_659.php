<?php
// LFI test variation #659
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
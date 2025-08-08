<?php
// LFI test variation #615
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
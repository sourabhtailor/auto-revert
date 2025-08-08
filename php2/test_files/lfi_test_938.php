<?php
// LFI test variation #938
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
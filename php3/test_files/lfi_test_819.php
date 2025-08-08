<?php
// LFI test variation #819
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
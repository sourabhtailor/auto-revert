<?php
// LFI test variation #913
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
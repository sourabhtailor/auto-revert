<?php
// LFI test variation #298
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
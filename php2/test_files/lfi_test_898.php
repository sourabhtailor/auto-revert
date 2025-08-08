<?php
// LFI test variation #898
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
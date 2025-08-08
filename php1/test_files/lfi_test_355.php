<?php
// LFI test variation #355
$page = $_GET['page'] ?? 'home.php';
include($page);
?>
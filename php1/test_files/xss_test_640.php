<?php
// XSS test variation #640
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
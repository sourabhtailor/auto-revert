<?php
// XSS test variation #301
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
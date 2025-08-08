<?php
// XSS test variation #1059
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1301
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
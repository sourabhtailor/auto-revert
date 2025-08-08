<?php
// XSS test variation #1305
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
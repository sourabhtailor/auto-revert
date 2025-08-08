<?php
// XSS test variation #1221
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
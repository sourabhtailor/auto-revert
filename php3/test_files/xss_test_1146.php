<?php
// XSS test variation #1146
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1241
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
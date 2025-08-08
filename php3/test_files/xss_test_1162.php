<?php
// XSS test variation #1162
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1192
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
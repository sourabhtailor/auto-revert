<?php
// XSS test variation #1220
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
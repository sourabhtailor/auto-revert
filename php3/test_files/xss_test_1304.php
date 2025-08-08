<?php
// XSS test variation #1304
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
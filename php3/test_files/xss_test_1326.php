<?php
// XSS test variation #1326
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
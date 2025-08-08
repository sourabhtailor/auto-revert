<?php
// XSS test variation #326
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
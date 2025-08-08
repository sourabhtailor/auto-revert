<?php
// XSS test variation #14
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
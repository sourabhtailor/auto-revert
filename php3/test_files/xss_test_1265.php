<?php
// XSS test variation #1265
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
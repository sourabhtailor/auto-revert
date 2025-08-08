<?php
// XSS test variation #1253
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
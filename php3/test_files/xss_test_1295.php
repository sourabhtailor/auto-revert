<?php
// XSS test variation #1295
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
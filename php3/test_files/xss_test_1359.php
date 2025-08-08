<?php
// XSS test variation #1359
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
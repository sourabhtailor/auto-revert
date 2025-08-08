<?php
// XSS test variation #1467
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
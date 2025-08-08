<?php
// XSS test variation #1483
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
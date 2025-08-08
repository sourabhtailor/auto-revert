<?php
// XSS test variation #1468
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
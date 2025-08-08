<?php
// XSS test variation #1412
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
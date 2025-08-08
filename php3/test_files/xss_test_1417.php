<?php
// XSS test variation #1417
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
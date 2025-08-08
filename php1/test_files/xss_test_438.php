<?php
// XSS test variation #438
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
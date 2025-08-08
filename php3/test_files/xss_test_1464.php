<?php
// XSS test variation #1464
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
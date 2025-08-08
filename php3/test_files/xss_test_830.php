<?php
// XSS test variation #830
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
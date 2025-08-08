<?php
// XSS test variation #1234
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1001
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
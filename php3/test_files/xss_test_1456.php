<?php
// XSS test variation #1456
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #456
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
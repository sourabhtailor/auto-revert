<?php
// XSS test variation #1180
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
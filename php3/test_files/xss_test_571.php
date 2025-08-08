<?php
// XSS test variation #571
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
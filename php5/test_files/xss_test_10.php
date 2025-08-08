<?php
// XSS test variation #10
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
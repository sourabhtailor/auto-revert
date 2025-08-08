<?php
// XSS test variation #479
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
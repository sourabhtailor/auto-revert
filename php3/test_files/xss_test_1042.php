<?php
// XSS test variation #1042
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
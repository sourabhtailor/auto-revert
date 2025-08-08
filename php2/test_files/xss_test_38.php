<?php
// XSS test variation #38
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
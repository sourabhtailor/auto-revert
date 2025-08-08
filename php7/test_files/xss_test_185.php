<?php
// XSS test variation #185
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1476
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1465
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
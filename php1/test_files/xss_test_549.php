<?php
// XSS test variation #549
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
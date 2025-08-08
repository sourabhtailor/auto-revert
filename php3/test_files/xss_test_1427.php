<?php
// XSS test variation #1427
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
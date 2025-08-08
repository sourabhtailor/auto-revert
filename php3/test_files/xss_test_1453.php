<?php
// XSS test variation #1453
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1475
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
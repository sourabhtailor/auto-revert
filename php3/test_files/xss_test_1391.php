<?php
// XSS test variation #1391
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
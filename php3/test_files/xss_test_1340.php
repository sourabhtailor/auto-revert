<?php
// XSS test variation #1340
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
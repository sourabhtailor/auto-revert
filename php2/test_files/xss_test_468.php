<?php
// XSS test variation #468
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
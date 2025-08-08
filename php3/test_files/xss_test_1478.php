<?php
// XSS test variation #1478
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
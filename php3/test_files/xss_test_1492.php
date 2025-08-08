<?php
// XSS test variation #1492
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
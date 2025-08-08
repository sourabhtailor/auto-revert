<?php
// XSS test variation #190
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
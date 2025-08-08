<?php
// XSS test variation #89
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
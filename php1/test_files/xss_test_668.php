<?php
// XSS test variation #668
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
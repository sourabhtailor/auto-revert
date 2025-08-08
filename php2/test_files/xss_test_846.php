<?php
// XSS test variation #846
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #30
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
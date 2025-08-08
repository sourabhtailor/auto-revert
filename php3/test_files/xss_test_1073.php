<?php
// XSS test variation #1073
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
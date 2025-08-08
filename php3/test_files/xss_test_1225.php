<?php
// XSS test variation #1225
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
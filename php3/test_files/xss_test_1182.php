<?php
// XSS test variation #1182
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
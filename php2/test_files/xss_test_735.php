<?php
// XSS test variation #735
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
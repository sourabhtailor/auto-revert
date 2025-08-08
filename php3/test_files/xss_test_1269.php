<?php
// XSS test variation #1269
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
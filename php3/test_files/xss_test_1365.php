<?php
// XSS test variation #1365
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
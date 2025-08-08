<?php
// XSS test variation #1188
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
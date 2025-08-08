<?php
// XSS test variation #216
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
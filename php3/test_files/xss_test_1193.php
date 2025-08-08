<?php
// XSS test variation #1193
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1358
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
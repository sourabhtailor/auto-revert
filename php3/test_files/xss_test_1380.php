<?php
// XSS test variation #1380
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
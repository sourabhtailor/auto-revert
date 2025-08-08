<?php
// XSS test variation #1362
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #294
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
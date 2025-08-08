<?php
// XSS test variation #1335
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
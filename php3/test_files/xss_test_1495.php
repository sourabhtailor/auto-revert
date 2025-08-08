<?php
// XSS test variation #1495
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
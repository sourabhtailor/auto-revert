<?php
// XSS test variation #495
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
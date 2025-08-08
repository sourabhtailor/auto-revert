<?php
// XSS test variation #936
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
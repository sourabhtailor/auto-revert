<?php
// XSS test variation #107
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
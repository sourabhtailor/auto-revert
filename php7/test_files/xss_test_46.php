<?php
// XSS test variation #46
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
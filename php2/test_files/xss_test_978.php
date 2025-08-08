<?php
// XSS test variation #978
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
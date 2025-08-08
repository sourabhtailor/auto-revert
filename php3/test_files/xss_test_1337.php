<?php
// XSS test variation #1337
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
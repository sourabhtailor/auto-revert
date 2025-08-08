<?php
// XSS test variation #1372
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
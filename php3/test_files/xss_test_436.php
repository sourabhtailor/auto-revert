<?php
// XSS test variation #436
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #169
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
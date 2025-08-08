<?php
// XSS test variation #417
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
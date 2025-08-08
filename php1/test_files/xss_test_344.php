<?php
// XSS test variation #344
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
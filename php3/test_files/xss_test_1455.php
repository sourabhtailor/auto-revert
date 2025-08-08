<?php
// XSS test variation #1455
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
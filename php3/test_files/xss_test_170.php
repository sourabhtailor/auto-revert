<?php
// XSS test variation #170
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
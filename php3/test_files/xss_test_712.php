<?php
// XSS test variation #712
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
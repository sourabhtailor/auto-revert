<?php
// XSS test variation #327
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
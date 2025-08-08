<?php
// XSS test variation #629
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
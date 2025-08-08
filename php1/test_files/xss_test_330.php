<?php
// XSS test variation #330
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
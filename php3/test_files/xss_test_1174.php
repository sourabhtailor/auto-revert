<?php
// XSS test variation #1174
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
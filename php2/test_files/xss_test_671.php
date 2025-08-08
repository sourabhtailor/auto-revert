<?php
// XSS test variation #671
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
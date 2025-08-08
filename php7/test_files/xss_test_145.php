<?php
// XSS test variation #145
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
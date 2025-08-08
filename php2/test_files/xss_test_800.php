<?php
// XSS test variation #800
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
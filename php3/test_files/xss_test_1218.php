<?php
// XSS test variation #1218
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
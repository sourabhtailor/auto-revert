<?php
// XSS test variation #1388
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
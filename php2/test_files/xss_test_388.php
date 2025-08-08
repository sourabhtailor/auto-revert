<?php
// XSS test variation #388
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
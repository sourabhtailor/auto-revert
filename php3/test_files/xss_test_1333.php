<?php
// XSS test variation #1333
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
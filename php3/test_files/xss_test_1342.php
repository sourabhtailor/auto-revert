<?php
// XSS test variation #1342
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
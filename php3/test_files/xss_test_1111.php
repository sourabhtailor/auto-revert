<?php
// XSS test variation #1111
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
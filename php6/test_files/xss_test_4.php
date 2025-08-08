<?php
// XSS test variation #4
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1011
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
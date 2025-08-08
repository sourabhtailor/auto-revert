<?php
// XSS test variation #34
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #200
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
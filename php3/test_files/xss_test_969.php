<?php
// XSS test variation #969
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
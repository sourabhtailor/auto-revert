<?php
// XSS test variation #538
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
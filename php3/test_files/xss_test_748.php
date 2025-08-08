<?php
// XSS test variation #748
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
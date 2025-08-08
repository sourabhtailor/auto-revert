<?php
// XSS test variation #157
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
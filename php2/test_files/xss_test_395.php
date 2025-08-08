<?php
// XSS test variation #395
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
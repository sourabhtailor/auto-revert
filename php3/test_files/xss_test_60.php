<?php
// XSS test variation #60
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
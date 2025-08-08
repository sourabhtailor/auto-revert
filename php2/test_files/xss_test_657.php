<?php
// XSS test variation #657
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1171
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
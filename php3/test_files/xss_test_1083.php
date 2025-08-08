<?php
// XSS test variation #1083
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
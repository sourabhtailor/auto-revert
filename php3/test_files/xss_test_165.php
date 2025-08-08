<?php
// XSS test variation #165
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
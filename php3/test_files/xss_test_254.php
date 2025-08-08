<?php
// XSS test variation #254
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
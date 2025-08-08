<?php
// XSS test variation #68
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1170
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #83
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
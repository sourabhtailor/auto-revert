<?php
// XSS test variation #753
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
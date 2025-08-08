<?php
// XSS test variation #1088
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
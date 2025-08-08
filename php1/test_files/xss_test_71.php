<?php
// XSS test variation #71
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #82
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
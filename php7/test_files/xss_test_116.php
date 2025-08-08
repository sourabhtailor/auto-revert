<?php
// XSS test variation #116
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
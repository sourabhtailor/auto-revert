<?php
// XSS test variation #1015
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
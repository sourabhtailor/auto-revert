<?php
// XSS test variation #1164
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
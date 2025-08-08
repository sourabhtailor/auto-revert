<?php
// XSS test variation #1307
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
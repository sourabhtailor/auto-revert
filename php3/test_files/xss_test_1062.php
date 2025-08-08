<?php
// XSS test variation #1062
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
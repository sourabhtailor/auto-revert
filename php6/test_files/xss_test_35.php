<?php
// XSS test variation #35
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #132
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
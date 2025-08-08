<?php
// XSS test variation #17
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
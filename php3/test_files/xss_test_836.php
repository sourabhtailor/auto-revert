<?php
// XSS test variation #836
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
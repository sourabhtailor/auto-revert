<?php
// XSS test variation #385
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
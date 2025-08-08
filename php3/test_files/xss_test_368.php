<?php
// XSS test variation #368
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
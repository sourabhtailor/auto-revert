<?php
// XSS test variation #197
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
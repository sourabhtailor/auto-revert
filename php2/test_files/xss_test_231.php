<?php
// XSS test variation #231
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #348
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
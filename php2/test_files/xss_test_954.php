<?php
// XSS test variation #954
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
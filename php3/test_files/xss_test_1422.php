<?php
// XSS test variation #1422
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
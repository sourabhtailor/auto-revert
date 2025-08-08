<?php
// XSS test variation #527
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
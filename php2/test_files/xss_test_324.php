<?php
// XSS test variation #324
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
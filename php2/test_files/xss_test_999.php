<?php
// XSS test variation #999
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #946
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
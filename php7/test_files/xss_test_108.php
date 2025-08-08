<?php
// XSS test variation #108
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
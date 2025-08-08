<?php
// XSS test variation #337
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
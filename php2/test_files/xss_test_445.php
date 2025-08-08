<?php
// XSS test variation #445
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #371
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
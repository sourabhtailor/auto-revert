<?php
// XSS test variation #531
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
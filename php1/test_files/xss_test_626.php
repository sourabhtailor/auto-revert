<?php
// XSS test variation #626
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
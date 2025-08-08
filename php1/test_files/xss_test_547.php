<?php
// XSS test variation #547
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
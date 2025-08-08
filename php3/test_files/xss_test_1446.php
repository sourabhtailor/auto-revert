<?php
// XSS test variation #1446
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
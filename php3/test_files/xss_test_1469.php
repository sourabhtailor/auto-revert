<?php
// XSS test variation #1469
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
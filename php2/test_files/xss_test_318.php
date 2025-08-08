<?php
// XSS test variation #318
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #515
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
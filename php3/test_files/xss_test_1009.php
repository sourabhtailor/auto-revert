<?php
// XSS test variation #1009
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
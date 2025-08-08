<?php
// XSS test variation #723
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
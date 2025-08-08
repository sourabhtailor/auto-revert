<?php
// XSS test variation #848
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
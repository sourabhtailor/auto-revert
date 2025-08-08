<?php
// XSS test variation #817
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #763
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
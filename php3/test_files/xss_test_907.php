<?php
// XSS test variation #907
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
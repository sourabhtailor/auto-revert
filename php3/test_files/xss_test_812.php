<?php
// XSS test variation #812
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
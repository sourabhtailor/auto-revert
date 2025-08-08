<?php
// XSS test variation #645
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #530
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
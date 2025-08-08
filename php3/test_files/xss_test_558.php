<?php
// XSS test variation #558
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1127
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #866
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
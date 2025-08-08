<?php
// XSS test variation #548
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
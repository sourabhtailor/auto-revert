<?php
// XSS test variation #551
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
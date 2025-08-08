<?php
// XSS test variation #94
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
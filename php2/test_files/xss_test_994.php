<?php
// XSS test variation #994
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
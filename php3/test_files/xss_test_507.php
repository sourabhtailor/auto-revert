<?php
// XSS test variation #507
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
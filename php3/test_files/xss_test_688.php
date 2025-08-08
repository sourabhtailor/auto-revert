<?php
// XSS test variation #688
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
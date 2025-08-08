<?php
// XSS test variation #802
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
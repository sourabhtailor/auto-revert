<?php
// XSS test variation #391
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
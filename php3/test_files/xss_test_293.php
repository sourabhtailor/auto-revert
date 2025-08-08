<?php
// XSS test variation #293
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
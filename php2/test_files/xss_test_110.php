<?php
// XSS test variation #110
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
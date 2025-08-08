<?php
// XSS test variation #364
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
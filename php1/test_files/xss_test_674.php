<?php
// XSS test variation #674
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
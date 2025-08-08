<?php
// XSS test variation #467
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
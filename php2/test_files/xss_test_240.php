<?php
// XSS test variation #240
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
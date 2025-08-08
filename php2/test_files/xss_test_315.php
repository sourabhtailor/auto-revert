<?php
// XSS test variation #315
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
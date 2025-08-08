<?php
// XSS test variation #275
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #332
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
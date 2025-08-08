<?php
// XSS test variation #957
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
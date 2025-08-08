<?php
// XSS test variation #875
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
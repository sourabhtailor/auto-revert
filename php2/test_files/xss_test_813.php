<?php
// XSS test variation #813
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
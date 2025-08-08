<?php
// XSS test variation #956
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
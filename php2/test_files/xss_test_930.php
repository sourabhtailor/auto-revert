<?php
// XSS test variation #930
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
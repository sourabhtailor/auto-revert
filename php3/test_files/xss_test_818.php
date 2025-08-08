<?php
// XSS test variation #818
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
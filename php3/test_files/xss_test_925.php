<?php
// XSS test variation #925
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
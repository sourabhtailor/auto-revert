<?php
// XSS test variation #713
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
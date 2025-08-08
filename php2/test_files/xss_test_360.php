<?php
// XSS test variation #360
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
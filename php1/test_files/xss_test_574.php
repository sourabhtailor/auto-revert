<?php
// XSS test variation #574
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
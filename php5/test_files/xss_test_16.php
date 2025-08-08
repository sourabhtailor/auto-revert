<?php
// XSS test variation #16
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
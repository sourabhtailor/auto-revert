<?php
// XSS test variation #759
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
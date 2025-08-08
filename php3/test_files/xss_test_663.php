<?php
// XSS test variation #663
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
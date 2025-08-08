<?php
// XSS test variation #537
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #412
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
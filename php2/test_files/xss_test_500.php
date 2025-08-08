<?php
// XSS test variation #500
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
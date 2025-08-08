<?php
// XSS test variation #235
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
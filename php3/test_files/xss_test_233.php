<?php
// XSS test variation #233
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
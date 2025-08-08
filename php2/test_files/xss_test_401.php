<?php
// XSS test variation #401
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
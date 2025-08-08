<?php
// XSS test variation #685
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #589
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
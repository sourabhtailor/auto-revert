<?php
// XSS test variation #540
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
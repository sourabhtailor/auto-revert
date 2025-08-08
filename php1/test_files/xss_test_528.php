<?php
// XSS test variation #528
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
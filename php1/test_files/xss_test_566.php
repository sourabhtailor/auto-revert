<?php
// XSS test variation #566
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
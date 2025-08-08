<?php
// XSS test variation #20
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
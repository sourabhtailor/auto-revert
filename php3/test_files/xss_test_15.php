<?php
// XSS test variation #15
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
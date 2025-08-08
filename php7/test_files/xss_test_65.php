<?php
// XSS test variation #65
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
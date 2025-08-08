<?php
// XSS test variation #894
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
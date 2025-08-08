<?php
// XSS test variation #958
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
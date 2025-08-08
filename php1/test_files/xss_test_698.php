<?php
// XSS test variation #698
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
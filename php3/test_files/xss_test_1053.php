<?php
// XSS test variation #1053
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
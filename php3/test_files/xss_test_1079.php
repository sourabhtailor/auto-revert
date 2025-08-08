<?php
// XSS test variation #1079
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
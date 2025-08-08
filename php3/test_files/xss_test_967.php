<?php
// XSS test variation #967
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
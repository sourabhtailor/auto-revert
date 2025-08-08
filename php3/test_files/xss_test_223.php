<?php
// XSS test variation #223
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
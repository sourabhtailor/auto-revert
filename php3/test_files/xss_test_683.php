<?php
// XSS test variation #683
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
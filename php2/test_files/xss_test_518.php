<?php
// XSS test variation #518
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
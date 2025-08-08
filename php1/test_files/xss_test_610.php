<?php
// XSS test variation #610
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #931
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
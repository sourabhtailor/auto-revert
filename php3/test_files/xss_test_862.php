<?php
// XSS test variation #862
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
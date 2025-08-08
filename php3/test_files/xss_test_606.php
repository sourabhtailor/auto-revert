<?php
// XSS test variation #606
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
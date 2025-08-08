<?php
// XSS test variation #934
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #535
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
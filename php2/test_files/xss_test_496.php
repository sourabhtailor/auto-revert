<?php
// XSS test variation #496
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
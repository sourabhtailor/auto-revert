<?php
// XSS test variation #754
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
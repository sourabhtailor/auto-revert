<?php
// XSS test variation #419
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
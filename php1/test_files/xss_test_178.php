<?php
// XSS test variation #178
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #105
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
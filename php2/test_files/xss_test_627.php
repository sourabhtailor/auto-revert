<?php
// XSS test variation #627
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
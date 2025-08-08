<?php
// XSS test variation #221
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
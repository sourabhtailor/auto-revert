<?php
// XSS test variation #384
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
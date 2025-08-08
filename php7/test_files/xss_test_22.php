<?php
// XSS test variation #22
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
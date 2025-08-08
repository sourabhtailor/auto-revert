<?php
// XSS test variation #1063
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
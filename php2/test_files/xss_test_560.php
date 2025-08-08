<?php
// XSS test variation #560
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
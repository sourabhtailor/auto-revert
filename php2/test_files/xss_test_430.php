<?php
// XSS test variation #430
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
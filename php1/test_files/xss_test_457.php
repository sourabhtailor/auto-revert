<?php
// XSS test variation #457
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #868
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
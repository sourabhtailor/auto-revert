<?php
// XSS test variation #219
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
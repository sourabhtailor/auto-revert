<?php
// XSS test variation #742
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #588
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
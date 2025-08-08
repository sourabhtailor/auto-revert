<?php
// XSS test variation #638
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
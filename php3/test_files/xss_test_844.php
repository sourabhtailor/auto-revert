<?php
// XSS test variation #844
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
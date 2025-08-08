<?php
// XSS test variation #607
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
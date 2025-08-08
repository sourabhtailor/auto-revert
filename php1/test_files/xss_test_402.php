<?php
// XSS test variation #402
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
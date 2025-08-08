<?php
// XSS test variation #375
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
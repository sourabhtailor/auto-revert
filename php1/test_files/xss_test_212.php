<?php
// XSS test variation #212
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
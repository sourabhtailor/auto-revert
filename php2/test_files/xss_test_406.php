<?php
// XSS test variation #406
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
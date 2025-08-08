<?php
// XSS test variation #296
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
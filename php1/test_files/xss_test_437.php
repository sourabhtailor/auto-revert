<?php
// XSS test variation #437
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
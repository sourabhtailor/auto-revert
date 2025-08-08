<?php
// XSS test variation #403
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #695
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
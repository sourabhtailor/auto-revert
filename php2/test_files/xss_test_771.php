<?php
// XSS test variation #771
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #900
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
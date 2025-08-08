<?php
// XSS test variation #709
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
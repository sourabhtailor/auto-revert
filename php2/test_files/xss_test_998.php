<?php
// XSS test variation #998
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
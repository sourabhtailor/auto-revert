<?php
// XSS test variation #949
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
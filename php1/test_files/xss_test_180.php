<?php
// XSS test variation #180
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
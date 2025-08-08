<?php
// XSS test variation #804
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
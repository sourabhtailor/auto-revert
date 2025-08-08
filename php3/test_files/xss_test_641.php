<?php
// XSS test variation #641
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
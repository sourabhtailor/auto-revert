<?php
// XSS test variation #618
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
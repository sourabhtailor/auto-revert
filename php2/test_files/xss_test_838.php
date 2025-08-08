<?php
// XSS test variation #838
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
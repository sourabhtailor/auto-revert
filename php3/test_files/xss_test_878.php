<?php
// XSS test variation #878
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
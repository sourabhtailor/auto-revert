<?php
// XSS test variation #911
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
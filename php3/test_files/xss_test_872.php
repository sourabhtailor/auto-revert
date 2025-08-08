<?php
// XSS test variation #872
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
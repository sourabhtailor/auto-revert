<?php
// XSS test variation #786
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
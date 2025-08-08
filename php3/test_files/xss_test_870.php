<?php
// XSS test variation #870
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
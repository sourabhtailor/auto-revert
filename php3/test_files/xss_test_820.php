<?php
// XSS test variation #820
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #154
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
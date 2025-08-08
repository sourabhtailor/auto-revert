<?php
// XSS test variation #118
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
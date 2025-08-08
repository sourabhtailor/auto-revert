<?php
// XSS test variation #871
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
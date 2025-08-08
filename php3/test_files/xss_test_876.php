<?php
// XSS test variation #876
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
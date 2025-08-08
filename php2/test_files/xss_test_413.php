<?php
// XSS test variation #413
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
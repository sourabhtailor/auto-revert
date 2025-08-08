<?php
// XSS test variation #152
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
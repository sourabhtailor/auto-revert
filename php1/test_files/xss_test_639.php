<?php
// XSS test variation #639
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
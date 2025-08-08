<?php
// XSS test variation #644
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
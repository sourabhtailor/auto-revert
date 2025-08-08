<?php
// XSS test variation #573
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
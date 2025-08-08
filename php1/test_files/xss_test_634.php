<?php
// XSS test variation #634
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
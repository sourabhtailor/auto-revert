<?php
// XSS test variation #655
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
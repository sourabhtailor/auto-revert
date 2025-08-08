<?php
// XSS test variation #300
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
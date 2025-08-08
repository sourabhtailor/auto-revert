<?php
// XSS test variation #171
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
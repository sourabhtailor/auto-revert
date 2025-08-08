<?php
// XSS test variation #867
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// XSS test variation #1334
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>
<?php
// Eval injection test variation #1334
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
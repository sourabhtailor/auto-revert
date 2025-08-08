<?php
// Eval injection test variation #486
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
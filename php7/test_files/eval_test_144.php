<?php
// Eval injection test variation #144
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
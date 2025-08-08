<?php
// Eval injection test variation #147
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
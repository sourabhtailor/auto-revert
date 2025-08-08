<?php
// Eval injection test variation #414
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
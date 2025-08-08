<?php
// Eval injection test variation #614
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
<?php
// Eval injection test variation #662
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
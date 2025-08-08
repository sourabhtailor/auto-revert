<?php
// Eval injection test variation #570
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
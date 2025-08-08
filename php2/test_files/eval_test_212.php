<?php
// Eval injection test variation #212
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
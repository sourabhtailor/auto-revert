<?php
// Eval injection test variation #406
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
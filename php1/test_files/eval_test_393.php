<?php
// Eval injection test variation #393
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
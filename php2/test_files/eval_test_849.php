<?php
// Eval injection test variation #849
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
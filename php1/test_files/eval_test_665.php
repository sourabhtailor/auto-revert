<?php
// Eval injection test variation #665
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
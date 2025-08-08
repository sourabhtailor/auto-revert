<?php
// Eval injection test variation #977
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
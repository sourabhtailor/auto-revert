<?php
// Eval injection test variation #821
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
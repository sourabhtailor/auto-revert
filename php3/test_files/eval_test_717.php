<?php
// Eval injection test variation #717
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>
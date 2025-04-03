<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 아이디와 비밀번호 검증 없이 바로 로그인 성공 처리
    header("Location: index.html");
    exit();
}
?>
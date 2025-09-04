<?php

return [
    'success' => [
        'default' => '성공',
        'create' => '생성 성공',
        'update' => '수정 성공',
        'delete' => '삭제 성공',
        'get' => '조회 성공',
        'list' => '목록 조회 성공',
        'search' => '검색 성공',
        'auth' => [
            'login' => '로그인 성공',
            'logout' => '로그아웃 성공',
            'register' => '회원 가입 성공',
            'token' => '토큰 발급 성공',
        ],
    ],

    'error' => [
        'default' => '오류가 발생했습니다',
        'server' => '서버 오류가 발생했습니다',
        'get_failed' => '조회 실패',
        'list_failed' => '목록 조회 실패',
        'create_failed' => '생성 실패',
        'update_failed' => '수정 실패',
        'delete_failed' => '삭제 실패',
        'search_failed' => '검색 실패',
        'validation' => [
            'default' => '입력값 검증 오류가 발생했습니다',
            'required' => '필수 입력 항목입니다',
            'email' => '올바른 이메일 형식이 아닙니다',
            'unique' => '이미 사용중인 값입니다',
            'min' => '최소 길이를 충족하지 않습니다',
            'max' => '최대 길이를 초과했습니다',
            'numeric' => '숫자만 입력 가능합니다',
            'date' => '올바른 날짜 형식이 아닙니다',
            'array' => '배열 형식이어야 합니다',
        ],
        'auth' => [
            'unauthorized' => '인증되지 않은 접근입니다.',
            'unapproved' => '승인되지 않은 회원입니다. 관리자 승인 후 이용해주세요.',
            'invalid_credentials' => '아이디 또는 비밀번호가 잘못되었습니다',
            'token_expired' => '토큰이 만료되었습니다',
            'token_invalid' => '유효하지 않은 토큰입니다',
            'token_blacklisted' => '사용할 수 없는 토큰입니다',
        ],
    ],
];

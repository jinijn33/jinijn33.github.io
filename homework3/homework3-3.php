<?php

function fibonacciRatio($n) {
    if ($n < 2) {
        echo "2 이상의 값을 입력해주세요.\n";
        return;
    }

    // 피보나치 수열 배열 초기화
    $fib = [1, 1];

    // 피보나치 수열 생성
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }

    // 헤더 출력
    echo "i\tfᵢ\tfᵢ₊₁\tfᵢ₊₁ / fᵢ\n";

    // 수열 및 비율 출력
    for ($i = 0; $i < $n - 1; $i++) {
        $fi = $fib[$i];
        $fi1 = $fib[$i + 1];
        $ratio = $fi1 / $fi;
        echo ($i + 1) . "\t$fi\t$fi1\t" . number_format($ratio, 6) . "\n";
    }
}

// 테스트 실행
$n = 6; // 원하는 항의 개수
fibonacciRatio($n);

?>

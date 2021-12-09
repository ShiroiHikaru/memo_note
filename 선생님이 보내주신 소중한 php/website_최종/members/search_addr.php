<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>주소 검색</title>
    <style type="text/css">
        body,button{font-size:16px}
        input{border:1px solid #999;font-size:14px;padding:5px 10px}
        input,button,select,option{vertical-align:middle}
        legend{font-size:20px}
        button{cursor:pointer}
        .txt{display:inline-block;width:120px}
        .btn{background:#fff;border:1px solid #999;font-size:14px;padding:4px 10px}
    </style>
</head>
<body>
    <form name="addr_search_form" action="result_addr.php" method="get">
        <fieldset>
            <legend>주소 검색</legend>
            <p>
                동 입력
                <input type="text" name="s_addr" id="s_addr" value="역삼동">
                <button type="submit">확인</button>
            </p>
        </fieldset>
    </form>
</body>
</html>
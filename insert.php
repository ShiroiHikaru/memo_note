<!-- <meta charset="utf-8"> -->
<?php
//header("content-type:text/html; charset=uft-8")
// 주석
/* 여러 줄 주석 */


//이전 페이지에서 값 가져오기
//php 변수선언 : $ (자바스크립트의 var 개념)

// method="get" : $_GET["필드의 name값"]
/*$u_name = $_GET["u_name"];
$user_id = $_GET["u_id"];
$pwd = $_GET["pwd"];
$birth = $_GET["birth"];
$zipcode = $_GET["zipcode"];
$add1 = $_GET["add1"];
$add2 = $_GET["add2"];
$em_id = $_GET["em_id"];
$em_dm = $_GET["em_dm"];
$phone = $_GET["phone"];
$agree = $_GET["agree"];*/

// method="post" : $_POST["필드의 name값"]
//$_POST["user_name"];

// 이전 페이지에서 가져오기
$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$birth = $_POST["birth"];
$zipcode = $_POST["zipcode"];
$add1 = $_POST["add1"];
$add2 = $_POST["add2"];
$em = $_POST["em_id"]."@".$_POST["em_dm"];
$phone = $_POST["phone"];
$reg_date = date("Y-m-d");


/* date : 날짜나 시간을 구하는 함수.
    yyyy / mm / dd
    yyyy-mm-dd

    date("형식") : $reg_date = date("Y-m-d");
    Y : 4자리 연도
    y : 2자리 연도
    - 시간 -
    H : 0~23시간
    h : 1~12시간
    m, s
*/

// 값 확인
// js : document.write()
// php : echo
echo "이름 : ".$u_name."<br>";
echo "아이디 : ".$u_id."<br>";
echo "비밀번호 : ".$pwd."<br>";
echo "생년월일 : ".$birth."<br>";
echo "우편번호 : ".$zipcode."<br>";
echo "기본주소 : ".$add1."<br>";
echo "상세주소 : ".$add2."<br>";
echo "이메일 : ".$em."<br>";
echo "전화번호 : ".$phone."<br>";
echo "가입일 : ".$reg_date;

/*DB 접속
  mysqli_connect("호스트", "사용자", "비밀번호");
  
  - 변수에 저장 -
  $dbcon = mysqli_connect("호스트", "사용자", "비밀번호", "DB명");
  
  mysqli_select_db("연결객체", "db명");
  $dbcon = mysqli_connect("localhost", "root", "1111", "front");  
*/

$dbcon = mysqli_connect("localhost", "root", "", "front") or die("접속에 실패하였습니다.");
mysqli_set_charset($dbcon, "utf8");
  
/*쿼리작성
 insert into 테이블명(필드명, 필드명, 필드명) values(값, 값, 값, ...) 
 insert into 테이블명(u_name, u_id, pwd, birth, zipcode, add1, add2, email, phone, reg_date) values(값, 값, 값, ...) 
 
 */
    //insert into 테이블명(u_name, u_id, pwd, birth, zipcode, add1, add2, email, phone, reg_date) values("백희연", "asdf", "1234", "19950121", "14777", "경기도 부천시", "소사구", "abc95121@naver.com","01011112222", "2021-12-03")

//$sql = "insert into members(u_name, u_id, pwd, birth, zipcode, add1, add2, email, phone, reg_date) values('백희연', 'asdf', '1234', '19950121', '14777', '경기도 부천시', '소사구', 'abc95121@naver.com','01011112222', '2021-12-03')";

// *$sql = "insert into members(u_name, u_id, pwd, birth, zipcode, add1, add2, email, phone, reg_date) 
// values('".$u_name."', '".$u_id."', '".$pwd."', '".$birth."', '".$zipcode."', '".$add1."', '".$add2."', '".$em."','".$phone."', '"$.reg_date."')"
// echo $sql;

// $sql = "insert into members(u_name, u_id, pwd, birth, zipcode, add1, add2, email, phone, reg_date) 
// values('$u_name', '$u_id', '$pwd', '$birth', '$zipcode', '$add1', '$add2', '$em','$phone', '$reg_date')"
// echo $sql;


$sql = "insert into members(";
$sql .= "u_name, u_id, pwd, birth,zipcode, add1, add2, email, phone, reg_date";
$sql .= ") values(";
$sql .= "'$u_name', '$u_id', '$pwd', '$birth', '$zipcode', '$add1', '$add2', '$em', '$phone', '$reg_date'";
$sql .= ");";

echo $sql;


/*데이터 베이스에 쿼리 전송*/
//mysqli_query("연결객체", "전달할 쿼리");

mysqli_query($dbcon, $sql);


/*DB(연결) 종료 */
// parameter : 값이 필요한 오류.
mysqli_close($dbcon);

/* 리디렉션 */
echo "
    <script type=\"text/javascrip\">
        location.herf = \"result.php\";
    </scirpt>
";

?>

<!-- <script type="text/javascrip">
    location.herf = "result.php";
</scirpt> -->
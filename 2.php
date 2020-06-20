<!DOCTYPE html>
<html lang="ko">
<head>
  <title>한국의 프로야구</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1><a href="index.html">한국의 프로야구</a></h1>
  <div id ="grid">
    <a href="1.html" >프로야구 소개</a>
    <strong><a href="2.html" style="color:gray; text-decoration:underline">순위</a></strong>
    <a href="3.html">오늘의 경기결과</a>
    <a href="4.html">주요뉴스</a>
    <a href="5.html">커뮤니티</a>
    <a href="6.html">게시판</a>
  </div>
  <?php
  ini_set("allow_url_fopen",1);
include"simple_html_dom.php";
$data = file_get_html("https://search.naver.com/search.naver?sm=tab_hty.top&where=nexearch&query=%EC%95%BC%EA%B5%AC%EA%B2%B0%EA%B3%BC&oquery=2020%EB%85%84+6%EC%9B%94+19%EC%9D%BC+%EC%95%BC%EA%B5%AC+%EA%B2%BD%EA%B8%B0%EC%9D%BC%EC%A0%95&tqi=UX1vnlp0J1sssOzBaR4ssssstbs-001136");

echo $data
  ?>
  <h3>라이더 맛집 모음</h3>
  <ul>
    <li><a href = "http://lofi.co.kr/" target = "_blank">로파이 바로가기</a><span>http://lofi.co.kr/</span></li><br>
    <li><a href = "http://www.doffjason.co.kr/" target = "_blank">도프제이슨 바로가기</a><span>http://www.doffjason.co.kr/</span></li><br>
    <li><a href = "http://sperone.co.kr/" target = "_blank">스페로네 바로가기</a><span>http://sperone.co.kr/</span></li><br>
    <li><a href = "http://agingccc.com/" target = "_blank">에이징 ccc 바로가기</a><span>http://agingccc.com/</span></li><br>
    <li><a href = "http://vivastudio.co.kr/" target = "_blank">비바스튜디오 바로가기</a><span>http://vivastudio.co.kr/</span></li><br>
    <li><a href = "http://oxstudios.co.kr/" target = "_blank">ox studios 바로가기</a><span>http://oxstudios.co.kr/</span></li><br>
  </ul>
  <script src = "bg.js"></script>
</body>
</html>

<?php
require_once('lib/Snoopy.class.php');

$snoopy = new Snoopy;
$snoopy->agent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)";

//login
$loginUri = 'http://www.bluebee.co.kr/loginTest.php';

$snoopy->httpmethod = "POST";
$auth['id'] = 'bluebee';
$auth['password'] = '1234';
$snoopy->submit($loginUri, $auth);

$snoopy->setcookies();	//로그인에 쿠키를 사용하는 경우가 있으니 쿠키정보를 저장
$loginResult = json_decode($snoopy->results);

$report_data = array();

if($loginResult->{'ret'} != "ok") {
	echo 'Login 실패!';
	exit;
} else {
		
	//리포트 데이터 크롤링
	$reportUri = 'http://www.bluebee.co.kr/reportTest.php';
		
	$snoopy->httpmethod = "POST";
	$report['sdate'] = '2019-11-01';
	$report['edate'] = '2019-11-13';
	$snoopy->submit($reportUri, $report);

	preg_match('/<tr class="reportR">(.*?)<\/tr>/is', $snoopy->results, $result_report_tr);
			
	if(sizeof($result_report_tr) > 1) {
		preg_match_all('/<td[^>]*>(.*?)<\/td>/is', $result_report_tr[1], $result_report_td);
		
		/*데이터 정리*/
	}

}
?>
# RocatServer
한이음 로봇캣맘 웹서버 : google cloud platform 사용

xampp 사용함<br>
Database : MariaDB 사용<br>
PHPmyAdmin 주소 : https://35.243.113.182/phpmyadmin/
          
DBname : rocat
<ul>
	Table :
	<li>Record : 고양이 탐지에 대한 기록(밥그릇번호 ,GPS, 이미지, 시간) 저장
	<li>Rocat : 밥그릇 정보 (밥그릇번호 , GPS, 사료 양, 영상 스트리밍 URL) 저장
	<li>User : 유저 정보 (유저id, 유저로그인ID, 비밀번호, 기기[스마트폰]ID) 저장 
	<li>Subscript : 유저의 밥그릇 알림 구독정보를 저장		
</ul>
<ul>
	View
	<li>Vt_subsdevice : 밥그릇마다 알림을 보낼 유저의 기기ID를 보여주는 뷰
</ul>

<ul>
PHP Files
	<li>addRecord : 밥그릇측에서 DB로 데이터를 보내기
	<li>cloudmessaging : fcm.googleapis.com/fcm/send로 특정 기기에 알림을 보냄
	<li>getsubstat : 어떤 유저가 특정 밥그릇의 알림을 구독하고있는지
	<li>
</ul>

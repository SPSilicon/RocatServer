# RocatServer
한이음 로봇캣맘 웹서버 : google cloud platform 사용

Database : MariaDB 사용
PHPmyAdmin 주소 : https://35.243.113.182/phpmyadmin/
          
DBname : rocat
Table :
	Record : 고양이 탐지에 대한 기록(밥그릇번호 ,GPS, 이미지, 시간) 저장
	Rocat : 밥그릇 정보 (밥그릇번호 , GPS, 사료 양, 영상 스트리밍 URL) 저장
	User : 유저 정보 (유저id, 유저로그인ID, 비밀번호, 기기[스마트폰]ID) 저장 
Subscript : 유저의 밥그릇 알림 구독정보를 저장
View
	Vt_subsdevice : 밥그릇마다 알림을 보낼 유저의 기기ID를 보여주는 뷰


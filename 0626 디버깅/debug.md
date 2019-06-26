#디버깅

코드가 길어질시 에러를 찾기 어렵다.
그럴때는 C:\Bitnami\wampstack-7.1.26-2\apache2\logs 에 error 문서를 열고 맨밑으로가면 
최근 오류를 확인할수 있따.

#PHP 에러 표시
C:\Bitnami\wampstack-7.1.26-2\php   에서 php.ini 파일 찾은뒤 열기.
display_errors 찾고 Off 를 On으로 변경 
wamp 실행 manage servers 에서 아파치 웹서버 선택후 restart
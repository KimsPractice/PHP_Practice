<?php
ini_set("display_errors", "1"); //실행동안만 php의 설정을 변경시킴
$uploaddir = 'E:\WEB\Bitnami\wampstack-7.1.16-0\apache2\htdocs\php\file\upload\\'; //업로드된 파일저장 디렉토리위치
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']); //업로드된 파일의 디렉토리 및 파일이름 지정, basename은 해당파일의 이름을 정확히 구분하기위한 함수
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) { //임시데릭토리에서 지정한 디렉토리로 이동
    echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
} else {
    print "파일 업로드 공격의 가능성이 있습니다!\n";
}
echo '자세한 디버깅 정보입니다:';
print_r($_FILES); //$_FILES는 PHP에서 업로드된 파일의 정보를 담고있는 함수
print "</pre>";
?>

<?php 
//$i="I'm responsible for fall in love with HeYunFeir. It's serious";
//$j=wordwrap($i,10,"<br>\n",true);
//echo $j;

//$ajaxSends=$_GET;
//$ajaxSends=$_POST;
$username=$_POST['username'];
$password=$_POST['password'];
$verify=$_POST['verify'];
//ajax返回的状态码和状态信息;
$results=['errno'=>1,'msg'=>'登录失败,请联系管理员'];
//echo json_encode($results);
//die();

//验证验证码是否正确有效
function checkVerify(){}
//验证用户名是否符合用户名规则
function checkUsername(){}
//验证密码是否符合密码规则, 并加密
function checkPassword(){}
//保存用户信息到数据库
function saveUserInfo(){}

$results['errno']=0;
$results['msg']='登陆成功,'.$username.'欢迎回到小米商城';
echo json_encode($results);
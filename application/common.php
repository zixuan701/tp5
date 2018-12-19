<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use PHPMailer\PHPMailer\PHPMailer;


/**
 * 邮件发送
 * @param $to 收件人邮箱地址
 * @param $title 邮件标题
 * @param $content 邮件内容
 */
function sendMail($to,$title,$content)
{
    //检查有没有打开openssl
    //echo !extension_loaded('openssl')?"Not Available":"Available";

    $mail = new PHPMailer();

    // 使用SMTP服务
    $mail->isSMTP();

    //错误调试
    //$mail->SMTPDebug = 2;

    // 编码格式为utf8，不设置编码的话，中文会出现乱码
    $mail->CharSet = "utf8";

    // 发送方的SMTP服务器地址
    //$mail->Host = "smtp.qq.com";
    $mail->Host = "smtp.163.com";

    // 是否使用身份验证
    $mail->SMTPAuth = true;

    /**
    //QQ发送使用下面的配置
    //发件邮箱账号
    $mail->Username = "825166808@qq.com";

    //发送方的邮箱密码，不是登录密码,是qq的第三方授权登录码,要自己去开启,在邮箱的设置->账户->POP3/IMAP/SMTP/Exchange/CardDAV/CalDAV服务里面
    $mail->Password = "aylsaxppqbzlbfib";

    // 本体可以暂时使用ssl,更新外网使用ssl协议方式,
    $mail->SMTPSecure = "tls";

    // QQ邮箱的ssl协议方式端口号是465/587
    $mail->Port = 587;
     */

    //163邮箱使用下面的配置

    //发件邮箱账号
    $mail->Username = "itxue8@163.com";

    //发送方的邮箱密码，不是登录密码,是qq的第三方授权登录码
    $mail->Password = "zixuan25888";

    // 本体可以暂时使用tls,更新外网使用ssl协议方式,
    $mail->SMTPSecure = "ssl";


    // QQ邮箱的ssl协议方式端口号是465/587
    $mail->Port = 587;

    // 设置发件人信息，如邮件格式说明中的发件人,
    $mail->setFrom("itxue8@163.com", "IT学霸资源网");

    // 设置收件人信息，如邮件格式说明中的收件人
    $mail->addAddress($to, '哈克');

    // 收件人收到地址后回复给哪个邮箱
    $mail->addReplyTo("4435316@qq.com", "Reply");

    // 设置邮件抄送人，可以只写地址，上述的设置也可以只写地址(这个人也能收到邮件)
    //$mail->addCC("xxx@163.com");

    // 设置秘密抄送人(这个人也能收到邮件)
    //$mail->addBCC("xxx@163.com");

    // 添加附件
    //$mail->addAttachment("bug0.jpg");

    // 邮件标题
    $mail->Subject = $title;
    // 邮件正文
    $mail->Body = $content;

    //$mail->AltBody = "This is the plain text纯文本";// 这个是设置纯文本方式显示的正文内容，如果不支持Html方式，就会用到这个，基本无用

    if (!$mail->send()) {// 发送邮件
        $arr=[
            'error'=>0,
            'msg'=>$mail->ErrorInfo
        ];
    } else {
        $arr=[
            'error'=>1,
            'msg'=>'发送成功'
        ];
    }
    return $arr;
}

/**
 * 发送短信验证码
 */

function sendCode(){

}

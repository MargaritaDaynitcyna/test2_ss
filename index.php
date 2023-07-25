<?php

function getParam($name, $default = "")
{
    return isset($_GET[$name]) ? $_GET[$name] : $default;
}

$domain = getParam("domain", "adltads.com");
$clickPhpUrl = "//$domain/click.php";
$uclick = getParam('uclick', false);
$city = getParam('city', '');
$clickid = getParam('clickid', '');
$offerLink = "quiz";
if ($domain) {
    $offerLink .= "?clickid=$clickid&domain=$domain&city=$city";
    if ($uclick) $offerLink .= "&uclick=$uclick";
};

function getDay($modifier = null)
{
    if (!is_null($modifier)) {
        return date('d.m.Y', strtotime($modifier . ' days'));
    }
    return date('d.m.Y');
}

// Название товара
$productName = 'Testo360';

// Цена триала
$trialPrice = '$6.35';

// Определение региона
$region = getParam('region', 'United States');
if ($region == 'Unknown')
    $region = 'United States';

// Сплит картинок
// $vitSplitVars = ['mainsecond.png', 'mainsecond2.png', 'mainsecond3.png'];
// $vitSplitVar = $vitSplitVars[rand(0, 2)];

// Сплит инчи и см
$inchCmSplits = array("4.3"=>array("inch","es","″","4.3","3.9"),"4.6"=>array("inch","es","″","4.6","3.9"),"4.9"=>array("inch","es","″","4.9","3.9"),"5.2"=>array("inch","es","″","5.2","3.9"));
$inchCmRand = array("4.3","4.6","4.9","5.2");
$inchCmSplit = $inchCmRand[array_rand($inchCmRand)];

// Единицы измерения и удлиннение
$measureUnitEn = $inchCmSplits[$inchCmSplit][0];
$endingEn = $inchCmSplits[$inchCmSplit][1];
$measureUnitEs = 'pulgada';
$endingEs = 's';
$alternativeVar = $inchCmSplits[$inchCmSplit][2];
$lengthIncrease = $inchCmSplits[$inchCmSplit][3];

// Стандартная длина
$standardLength = $inchCmSplits[$inchCmSplit][4];

// Время приема препарата
$daysVar = '30';

// Отзывы
$nameVarEn = ['William Hurst', 'Daniel Read', 'Harvey Carroll', 'Ethan Conway', 'Scott Skinner', 'Marcus Bonilla', 'Donald Tatum', 'Aaron Shores', 'Shawn Elder', 'Chris Williams'];
$ageVar = ['38', '31', '43', '35', '26', '32', '29', '30', '33', '31'];

// Персонажи проклы
$firstVarNameEn = 'Thomas';
$firstVarSurnameEn = 'Weaver';
$secondVarNameEn = 'Martin';

// Обновление $offerLink
$offerLink .= "&inchcmsplit=$inchCmSplit";

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?php echo ($productName) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="img/favicon.ico" rel="shortcut icon"> -->
    <style>
        #emc-progress,#emc-progress_ind,footer,section{width:100%}.next-min,input[type=radio]:checked+label{background:#4dd86d;color:#169734}#ssbutton-fix,header{text-transform:uppercase}.question-num,a,a:focus,a:hover{text-decoration:underline}button,h1,h2,h3,h4,input,select{font-family:inherit}#header .header-icons .btn,.stripe .icon{vertical-align:text-bottom}.btn,.input-group-btn,img{vertical-align:middle}#footer,.clear,.row:after{clear:both}#wrapper,button{overflow:visible}#bottle,#emc-score,#footer,#header .white-stripe h2,#headertheme h1,#progress-button,#ssbutton-fix,.attrib,.btn,.effects,.icon.user,.left_box,.numbers span,.secret_box h3,.stock,h4,header,input[type=radio]+label{text-align:center}#mobile-login-btn.init-ok,#site-settings-button,#ssbutton:hover,.animated-hamburger,.btn,.comeback_close,.lang-switcher,.next-min,a,button,img,input[type=radio]+label:hover{cursor:pointer}@keyframes emc-progress_inner{0%{background-position:30px 0}to{background-position:0 0}}.row:after,.row:before{content:"";display:table}*,a:active,a:hover{outline:0}code{background:#fff;color:#999;padding:2px 8px}#bottle,.input-group-btn>.btn,header,section{position:relative}header{color:#1f8f7b;border-bottom:1px solid #eee;letter-spacing:4px;padding:12px 0;background:#fafafa;display:block;overflow:hidden}.wrap{max-width:48em;margin:0 auto;padding:2.5em 0 4em}.row.last{border-bottom:3px solid #eee;border-top:3px solid #eee;margin-bottom:100px;padding-top:100px}section{padding:30px 20px;background:#2e2e2e;margin:30px auto 20px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}section.item-incorrect{background:#f6f6f6}section.item-incorrect:before{position:absolute;bottom:0;right:0;content:"";height:0;width:0;border:35px solid;border-color:transparent #ff5c61 #ff5c61 transparent}section.item-correct:after,section.item-incorrect:after{position:absolute;bottom:1px;right:1px;content:url('./img/chek.svg');width:25px;height:25px;transition:.3s}section.item-correct:before{position:absolute;bottom:0;right:0;content:"";height:0;width:0;border:25px solid;border-color:transparent #4dd86d #4dd86d transparent;transition:.5s}.choices{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;font-size:18px}.choices label:not(:first-child):not(:nth-child(2)){margin:5px 0 5px 10px}input[type=radio]{position:absolute;visibility:hidden}input[type=radio]+label{background:#888;display:inline-block;width:100%;padding:10px 15px;margin:5px 0;border-radius:5px;-webkit-transition:.1s linear;-moz-transition:.1s linear;transition:.1s linear}.question,.question-num{font-weight:700;margin-bottom:10px}.question-num{font-weight:400}.next-quest,.submit{padding:20px 5px}.next-quest button,.submit button{display:block;outline:0;width:300px;margin:1em auto 1.5em;padding:.8em 1em;background:#f8f8f8;color:#dcdcdc;text-transform:uppercase;letter-spacing:3px;border:1px solid #eee}#emc-next-quest,#emc-submit{position:relative;-webkit-transition:.33s;-moz-transition:.33s;transition:.33s}#emc-next-quest.ready-show,#emc-submit.ready-show{background:#2dceb1;color:#1f8f7b;border:0;border-bottom:2px solid #26af96;box-shadow:0 1px 1px rgba(68,68,68,.2);-webkit-transform:rotateX(360deg);-moz-transform:rotateX(360deg);-ms-transform:rotateX(360deg);-o-transform:rotateX(360deg);transform:rotateX(360deg)}#emc-next-quest.ready-show:hover,#emc-submit.ready-show:hover{color:#fbfbfb;background:#27b198;border-color:#1f8f7b}#emc-next-quest.ready-show:active,#emc-submit.ready-show:active{top:2px;border-bottom:none}#emc-score{opacity:0;padding:0;-webkit-transition:.55s;-moz-transition:.55s;transition:.55s}#emc-score.new-score{opacity:1;background:#2dceb1;color:#fbfbfb;padding:20px}#emc-progress{height:100%;background:#f7f7f7;border-radius:50px;transition:.1s;-webkit-transition:.1s;-moz-transition:.1s}#emc-progress,#emc-progress_ind,#emc-progress_inner,:after,:before,:not(.domain-ss),footer{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}#emc-progress_inner{width:0;height:100%;background:0 0/30px 30px #169734;border-radius:50px;background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);-webkit-transition:width .33s cubic-bezier(.68, -.55, .265, 1.55);-moz-transition:width .33s cubic-bezier(.68, -.55, .265, 1.55);transition:width .33s cubic-bezier(.68, -.55, .265, 1.55);-webkit-animation:1s linear infinite emc-progress_inner;animation:1s linear infinite emc-progress_inner}#emc-progress_ind{opacity:.9;position:absolute;display:block;font-size:16px;font-weight:700;margin:0 auto;top:38%;left:0;color:#000;z-index:2}.footer-wrap{display:flex;justify-content:space-between;width:770px;height:100%;margin:0 auto}.en .es,.es .en,.graph img,.mobile-show,.mobile-show-inline-block,.next-min,.site-settings-menu-none,.stock,footer{display:none}footer{z-index:999!important;opacity:0;position:fixed;height:70px;background:rgba(9,9,9,.9);bottom:0;padding:15px 12px;-webkit-transition:opacity .33s;-moz-transition:opacity .33s;transition:opacity .33s}#emc-progress_ind,.next-min{height:100%;text-align:center}.next-min{align-items:center;justify-content:center;width:40px;border-radius:100%;border:0;transition:.1s;-webkit-transition:.1s;-moz-transition:.1s;z-index:4}a,h4{color:#fff}.fa-arrow-right{content:url('./img/arrow.svg');width:25px;height:25px;transition:.3s}@media (max-width:800px){.footer-wrap{width:100%}footer{padding:15px 10px}}@media (max-width:600px){.choices{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.choices label:not(:first-child):not(:nth-child(2)){margin:5px 0}}.attrib{padding:10px 0}.attrib i{margin-right:7px;margin-left:7px}.stock-title{font-size:25px;font-weight:700;width:100%;margin-bottom:20px;margin-top:15px}.stock-text{font-size:18px;width:100%;margin-bottom:15px}#progress-button,.stock-button{padding:12px 25px;background-color:#0083b2;color:#fff;border-radius:5px;max-width:500px;margin:25px auto;border:0;box-shadow:inset 0 1px 0 0 #2e2e2e;text-shadow:0 -1px 1px #64799e;text-decoration:underline;font:700 25px/1 "Lucida Grande","Lucida Sans Unicode","Lucida Sans",Geneva,Verdana,sans-serif}a img,hr,img{border:0}.icon-f,.icon.user{font-family:iconfont!important;font-style:normal;font-variant:normal;text-transform:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}#progress-button:hover,.stock-button:hover{background-color:#de2600;box-shadow:inset 0 1px 0 0 #2e2e2e;cursor:pointer}#progress-button{display:none;opacity:0;padding:10px 0;width:100%;margin:0 auto;font:700 21px/1 "Lucida Grande","Lucida Sans Unicode","Lucida Sans",Geneva,Verdana,sans-serif;transition:.33s}#ssbutton-fix,.btn,.forfoto p.kga,.mark span,b,h4,label,strong{font-weight:700}#ssbutton-fix{display:block;font-size:27px;background:0 0;color:#0083b2;text-decoration:none;margin:20px auto 5px;line-height:35px}.stripe,svg:not(:root){overflow:hidden}hr{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;height:0;margin-top:8px;margin-bottom:8px;border-top:1px solid rgba(255,255,255,.3)}button,input,select{color:inherit;font:inherit;margin:0;font-size:inherit;line-height:inherit}.btn,.form-control{padding:6px 12px;font-size:12px;line-height:1.5}h3,h4{line-height:1.1}button{-webkit-appearance:button}button,select{text-transform:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}@media print{*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;-moz-box-shadow:none!important;box-shadow:none!important}a,a:visited{text-decoration:underline}a[href]:after{content:" ("attr(href) ")"}img{page-break-inside:avoid;max-width:100%!important}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}}.btn,.btn-default:active,.btn:active,.form-control{background-image:none}a{background-color:transparent}a:focus,a:hover{color:#d9d9d9}.btn:active:focus,.btn:focus,a:focus{outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px}h1,h2,h3{text-align:left}h4{margin:4px 0;font-size:1.2em}.forfoto p,p{margin:10px 0}.text-danger{color:#de2600}label{display:inline-block;max-width:100%;margin-bottom:5px}.form-control{display:block;width:100%;height:32px;background-color:#2e2e2e;border:1px solid #ccc;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;-o-transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;-moz-transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out,-moz-box-shadow .15s ease-in-out;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out,-moz-box-shadow .15s ease-in-out}.form-control:focus{border-color:#bfbfbf;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(191,191,191,.6);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(191,191,191,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(191,191,191,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{background-color:transparent;border:0}.btn{display:inline-block;white-space:nowrap;-ms-touch-action:manipulation;touch-action:manipulation;border:1px solid transparent;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.btn:focus,.btn:hover{color:#fff;text-decoration:none}.btn:active{outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);-moz-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}#header .header-icons .btn,.form-control{-webkit-box-shadow:none;-moz-box-shadow:none}.btn-default{color:#fff;background-color:#404040;border-color:#737373}.btn-default:focus{color:#fff;background-color:#262626;border-color:#333}.btn-default:active,.btn-default:hover{color:#fff;background-color:#262626;border-color:#545454}.btn-default:active:focus,.btn-default:active:hover{color:#fff;background-color:#141414;border-color:#333}.input-group{position:relative;display:table;border-collapse:separate}.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control:focus{z-index:3}.input-group .form-control,.input-group-btn{display:table-cell}.input-group-btn{width:1%;position:relative;font-size:0;white-space:nowrap}.input-group .form-control:first-child{-webkit-border-top-right-radius:0;-moz-border-radius-topright:0;border-top-right-radius:0;-webkit-border-bottom-right-radius:0;-moz-border-radius-bottomright:0;border-bottom-right-radius:0}.input-group-btn:last-child>.btn{-webkit-border-top-left-radius:0;-moz-border-radius-topleft:0;border-top-left-radius:0;-webkit-border-bottom-left-radius:0;-moz-border-radius-bottomleft:0;border-bottom-left-radius:0;z-index:2;margin-left:-1px}.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{z-index:2}.center-block{display:block;margin-right:auto;margin-left:auto}.hidden{display:none!important}.flag-small,.icon{display:inline-block}.icon-f{speak:never;font-weight:400;line-height:1;letter-spacing:0;-webkit-font-feature-settings:liga;-moz-font-feature-settings:liga;-ms-font-feature-settings:liga1;font-feature-settings:liga;-webkit-font-variant-ligatures:discretionary-ligatures;-moz-font-variant-ligatures:discretionary-ligatures;font-variant-ligatures:discretionary-ligatures}.icf-close-thin:before{content:"\e94a"}.icf-cog:before{content:"\e947"}.icf-home:before{content:"\e928"}.icf-search:before{content:"\e938"}.flag-small{width:16px;height:11px;line-height:11px;background-image:url(img/flags-16.png);background-position:0 0;background-repeat:no-repeat}.flag-small.flag-usa{background-position:0 -226px}.flag-small.flag-es{background-position:-32px -66px}.flag-small.flag-gb{background-position:-192px -66px}::-moz-selection,::selection{background:#de2600;color:#fff;text-shadow:none}.btn{margin:0 2px 4px 0;border-width:1px;-webkit-transition:background .2s,border .2s,-webkit-box-shadow .2s;-o-transition:box-shadow .2s,background .2s,border .2s;-moz-transition:box-shadow .2s,background .2s,border .2s,-moz-box-shadow .2s;transition:box-shadow .2s,background .2s,border .2s,-webkit-box-shadow .2s,-moz-box-shadow .2s}.input-group-btn .btn{margin-right:0}a.btn{text-decoration:none}#ssbutton,.secret_box h3{text-decoration:underline}.icon{background-position:left top;background-repeat:no-repeat;background-image:url(img/xv-icons-sprite.png);background-image:linear-gradient(transparent,transparent),url(img/xv-icons-sprite.svg)}#site-settings-wrap,.site-settings-menu{display:-webkit-box;display:-ms-flexbox}.icon.logo-bg{border-style:solid;border-color:#161616;background-color:#161616}.icon.user{width:16px;speak:none;font-weight:400;background:0 0;font-size:24px;height:24px;line-height:24px}.icon.user:hover{background-position:-221px 0}.icon.user.logo-bg{width:32px;height:32px;margin:3px;border-width:4px;background-position:-144px -40px}.icon.user:before{content:"\e948"}.form-control{color:#ddd;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;box-shadow:none}select option{background:#fff;color:#000}select option:active,select option:focus,select option:hover{background:#de2600;color:#fff}input[type=text],input[type=text].form-control,select:focus{font-size:17px}#site-logo-link{max-width:160px}::-moz-selection{text-shadow:none;background:#de2600;color:#fff}::selection{background:#de2600;color:#fff}#header{line-height:18px;font-size:13px}#header .white-stripe{overflow:visible;padding:5px 10px}#header .white-stripe h2,#header .white-stripe h2 .pad{overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis}#header .white-stripe h2{font-size:14px;line-height:40px;margin:0;white-space:nowrap}#header .white-stripe h2 .pad{margin:0 14px;max-width:100%;display:block;font-weight:700}#header a.logo{position:relative;float:left;width:auto;height:40px;margin:0;padding:2px 0;z-index:1}#header a.logo,#header a.logo image,#header a.logo svg{background:#161616;display:block}#header .header-icons{height:40px;float:right}#header .header-icons .btn{border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;box-shadow:none;font-size:16px}#header .header-icons #mobile-login-btn,#header .header-icons .menu-login-acct{background:#de2600;color:#fff;margin:4px 0 4px 4px;padding:4px 12px 3px}#header .header-icons #mobile-login-btn:hover,#header .header-icons .menu-login-acct:hover{background:#c52200}#header .header-icons .btn-login{background:0 0;color:#888;margin:4px 0 4px 4px;padding:4px 4px 3px}#header .header-icons .btn-login:hover{background:0 0;text-decoration:underline}#header .animated-hamburger{font-size:40px;float:left;margin:0 0 0 -4px}#header .animated-hamburger.init-ok span{background:#888}#header .animated-hamburger span{background:#404040}.site-settings,.site-settings-menu,.site-settings-menu-none{position:relative;font-size:14px;color:#fff;background:#2e2e2e;font-weight:700;padding:2px 8px;vertical-align:middle;text-decoration:none}.site-settings-menu,.site-settings-menu-none{top:35px;right:0;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;position:absolute;padding:10px 0}.site-settings-menu{display:flex}.site-settings-menu .site-settings{font-size:15px;padding:3px 15px}#site-settings-wrap{display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;position:relative}.site-settings .flag-small{vertical-align:baseline}#mobile-login-btn{opacity:.5;cursor:default;-webkit-transition:opacity .2s;-o-transition:opacity .2s;-moz-transition:opacity .2s;transition:opacity .2s}#mobile-login-btn.init-ok{opacity:1}#xv-search-form{float:left;height:40px;overflow:hidden;width:30%}#home-search div.cont,#xv-search-form div.cont{padding:1px 0 1px 10px;overflow:hidden}#home-search .search-input,#xv-search-form .search-input{background:#fff;border:2px solid #ddd;border-right:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:3px 0 0 3px;-webkit-border-bottom-left-radius:3px;-moz-border-radius-bottomleft:3px;-webkit-border-top-left-radius:3px;-moz-border-radius-topleft:3px;color:#000;font-size:18px;height:38px;margin:0;padding:4px 10px}#header a.logo:hover,#home-search .search-input:focus,#xv-search-form .search-input:focus,.btn,.btn:active,.btn:hover{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}#home-search .search-submit,#xv-search-form .search-submit{background:#ddd;border:2px solid #ddd;border-left:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0 3px 3px 0;-webkit-border-top-right-radius:3px;-moz-border-radius-topright:3px;-webkit-border-bottom-right-radius:3px;-moz-border-radius-bottomright:3px;color:#000;font-size:16px;font-weight:400;height:38px;margin:0;position:relative;-webkit-transition:background .2s;-o-transition:background .2s;-moz-transition:background .2s;transition:background .2s}#home-search .search-submit:hover,#xv-search-form .search-submit:hover{background:#d0d0d0}#home-search .search-submit:focus,#xv-search-form .search-submit:focus{outline:0;background:#c3c3c3}#home-search .search-submit span,#xv-search-form .search-submit span{margin:0 3px}.animated-hamburger{display:block;height:1em;position:relative;width:1em}.animated-hamburger span{background:#000;-webkit-border-radius:.05em;-moz-border-radius:.05em;border-radius:.05em;display:block;height:.1em;left:.175em;position:absolute;top:.24em;-webkit-transform-origin:center bottom;-moz-transform-origin:center bottom;-ms-transform-origin:center bottom;-o-transform-origin:center bottom;transform-origin:center bottom;width:.625em}.animated-hamburger .an-h-2,.animated-hamburger .an-h-3{top:.44em;-webkit-transform-origin:center;-moz-transform-origin:center;-ms-transform-origin:center;-o-transform-origin:center;transform-origin:center}.animated-hamburger .an-h-4{-webkit-transform-origin:center top;-moz-transform-origin:center top;-ms-transform-origin:center top;-o-transform-origin:center top;transform-origin:center top;top:.64em}#footer{margin:20px 0 10px;overflow:hidden}@media (min-width:1024px){#header .white-stripe h2{font-size:18px}}@media (min-width:1120px){#header .white-stripe h2{font-size:20px}}@media (min-width:1440px){body{padding-left:80px;padding-top:8px;padding-right:80px}}@media (max-width:767px){.footer-wrap{width:93%}footer{padding:15px 0}#header a.logo,#header a.logo image,#header a.logo svg,#xv-search-form{background:#161616}.mobile-show{display:block}#header a.logo,.mobile-show-inline-block{display:inline-block}.mobile-hide{display:none}.icon.logo-bg{border-color:#161616;background-color:#161616}#header,#header .white-stripe{width:100%;z-index:200}#header .white-stripe{color:#fff;background:#161616;border-bottom:1px solid #444;left:0;position:fixed;text-align:center;top:0;padding:0}#header #header-mobile-search-toggle{float:left;margin-right:0;color:#fff;font-size:22px;height:40px;line-height:38px;text-decoration:none;text-align:center;width:36px}#header #header-mobile-search-toggle:hover{color:#de2600}#header a.logo{float:none;margin:0 auto;max-width:-webkit-calc(100% - 180px);max-width:-moz-calc(100% - 180px);max-width:calc(100% - 180px);overflow:hidden;vertical-align:text-top;-webkit-box-shadow:4px 0 8px -4px transparent;-moz-box-shadow:4px 0 8px -4px transparent;box-shadow:4px 0 8px -4px transparent;-webkit-transition:-webkit-transform .2s;-o-transition:-o-transform .2s;-moz-transition:transform .2s,-moz-transform .2s;transition:transform .2s,-webkit-transform .2s,-moz-transform .2s,-o-transform .2s}#header .animated-hamburger{margin-left:4px}#header .animated-hamburger.init-ok span{background:#fff}#header .animated-hamburger span{background:#aaa}#header .header-icons .btn,#header .header-icons .btn#mobile-login-btn{background:0 0;margin:0;padding:0}#header .header-icons .btn .icon{margin:0}#header .header-icons .site-settings{color:#fff;padding:7px 8px;margin:3px 2px 3px 0}h2#mobile-slogan{-o-text-overflow:ellipsis;text-overflow:ellipsis;color:#fff}#mobile-slogan{background:#2e2e2e;border-bottom:1px solid #404040;font-size:12px;height:37px;margin:40px 0 0;overflow:hidden;padding:0;text-align:center;white-space:nowrap;font-weight:700}#mobile-slogan>*{font-size:12px;height:34px;line-height:34px;margin:0;padding-bottom:0;padding-top:0}#home-search{overflow:hidden;padding:8px 0;margin-left:8px;margin-right:8px}#home-search .icf-home{color:#ddd;float:left;font-size:30px;line-height:40px;text-align:center;width:30px}#home-search form{float:left;width:-webkit-calc(100% - 30px);width:-moz-calc(100% - 30px);width:calc(100% - 30px)}#xv-search-form{float:none;height:54px;margin-bottom:0;overflow:hidden;position:relative;width:100%}#xv-search-form.mobile-hide{display:block;height:0}#xv-search-form.mobile-hide div.cont{opacity:0}#xv-search-form div.cont{border-bottom:0;bottom:0;left:0;opacity:1;padding:0;position:absolute;-webkit-transition:.5s;-o-transition:.5s;-moz-transition:.5s;transition:.5s;width:100%}#xv-search-form div.cont div{margin:0 auto;max-width:350px;padding:8px}#home-search .search-input,#home-search .search-submit,#xv-search-form .search-input,#xv-search-form .search-submit{border-color:#ddd}.forfoto .rel,.forfoto img{max-width:300px;float:none}.effects div.phot,.effects div.txt{width:100%;margin:0 auto 5%;min-width:auto}.forfoto img{margin:auto;width:100%!important}.forfoto{text-align:center;padding:10px}.forfoto p{text-align:left;margin:20px auto 0!important;padding-left:0!important}.forfoto .rel{width:100%}.relclear{clear:both}.forfoto .txt{width:96%;text-align:center;float:none;margin:auto;padding:0}#headertheme h1{font-size:17pt!important}.halfborder{border-width:0 1px;margin:0}#copyright,.legal_testim{font-size:16px!important;line-height:1.3em!important}button,input,label,select{font-size:18px}}@media (max-width:767px) and (min-aspect-ratio:11){body{overflow:auto;position:static}#home-search{margin-left:8px;margin-right:8px}}#header a.logo{-webkit-box-shadow:4px 0 8px -4px transparent;-moz-box-shadow:4px 0 8px -4px transparent;box-shadow:4px 0 8px -4px transparent}.wrapper{min-height:500px;width:690px;margin:0 auto;font-family:verdana;font-size:16px;line-height:25px;color:#3d3d3d}*,body{margin:0;padding:0}h3{font-weight:bolder;margin:1em 0;color:#0083b2;font-size:26px!important}.comeback_container h1,h1{font-size:40px}h2{font-size:28px}.secret_box h3{color:#000;margin:5px 0 15px}#footer{font-size:14px;width:auto!important;margin-bottom:32px}#footer,.numbers span{margin-top:10px}#footer a{color:#aaa}#bottle{width:100%;margin:20px auto;max-width:500px}#bottle img{display:block;margin:0 auto 20px;max-height:400px;width:auto;max-width:100%}.graph img{position:absolute;float:right;margin-left:5px;margin-top:-20px}.graph{background-color:#2e2e2e;background-repeat:no-repeat;background-position:-15px 0;margin-top:15px;border:1px solid #000;background-size:100%;background-repeat-y:repeat;width:100%}.graph .txt,.numbers{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.effects div,.list0,.numbers div{display:inline-block}.graph .beforetxt,.graph .txt{position:relative;text-align:left;color:#fff;padding:0}.graph .txt{background:#004586;margin-bottom:2.5%}.graph .beforetxt{background:#0083b2;margin-top:2.5%}.graph .beforetxt span,.graph .txt span{text-align:left;display:block;padding:5px 10px}.numbers{width:100%;overflow:hidden}.numbers span{width:100%;display:block;padding-top:5px}.halfborder{border-width:0 1px;margin:0;background:0 0}@media (max-width:760px){.list0{width:90%}}@media (max-width:385px){.list0{width:80%!important}}body{max-width:1920px;margin:0 auto;background:#161616}#headertheme,#wrapper{margin:0 auto;width:100%}#wrapper,body{font-family:Arial,Helvetica,sans-serif}#wrapper{padding:20px 10px;min-height:500px;max-width:770px;border-left:none;border-right:none;color:#fff;font-size:16px;line-height:25px}h1,h2{color:#fff;font-weight:400;margin:20px 0 0;line-height:40px}#headertheme{height:auto;background:url(img/bg.jpg);padding:0 10px 30px;box-sizing:border-box;-moz-box-sizing:border-box}#headertheme h1{font-family:Tahoma,Helvetica,sans-serif;color:#fff;font-weight:700;font-size:46pt;line-height:1.17em;margin-top:0;padding-top:30px}.forfoto p{margin-left:7px!important}.forfoto{padding:5px;background:#2e2e2e;margin-top:30px;overflow:auto;position:relative}.effects .phot img{max-width:300px;width:100%;margin:0}.effects div.phot{width:39%;min-width:300px}.effects div.txt{width:56%;margin-left:4%;max-width:520px}.effects div{vertical-align:top;margin:0 auto 5%}.left_box{float:left;width:50%;margin-right:20px;border:1px solid #000}.left_box img{max-width:100%;max-height:400px;margin:0 auto}.left_box>p,.list0 li{text-align:left}.left_box p{background:#2e2e2e;margin-bottom:0;padding:2px 10px}.list0{padding-left:10%;width:90%}.list0 li{padding-left:10px;line-height:170%}.lefto{float:left;margin-right:15px;width:300px}.forfoto b{text-align:right;display:block;margin-right:10px}.forfoto p.kga{position:absolute;padding:10px;margin-bottom:0;background:rgba(180,180,180,.6);border-radius:7px;font-size:25px;top:inherit;left:inherit;bottom:10px;right:10px;color:#000}.forfoto .txt{float:right;width:58%;padding-right:1%}.forfoto .rel{float:left;width:40%;max-width:300px;position:relative;margin:auto;display:inline-block;vertical-align:top}.typicallist{padding-left:60px}.typicallist li{list-style-image:url(img/checked.png);margin-top:5px;padding-left:5px}.layers{margin-top:20px}@media (max-width:768px){#wrapper{padding:20px 0}.list0{width:85%}}@media (min-width:768px){#wrapper>h4:nth-child(42){margin-bottom:40px}}@media (max-width:767px){#wrapper{width:93%}.effects div.phot,.effects div.txt{width:100%;margin:0 auto 5%;min-width:auto}.forfoto .rel,.forfoto img{float:none;max-width:300px;width:100%}.forfoto img{margin:auto;width:100%!important}.forfoto,.forfoto .txt{text-align:center;padding:10px}.forfoto p{text-align:left;margin:20px auto 0!important}.relclear{clear:both}.forfoto .txt{width:96%;float:none;margin:auto;padding:0}#headertheme h1{font-size:17pt!important}.halfborder{border-width:0 1px;margin:0}#copyright,.legal_testim{font-size:16px!important;line-height:1.3em!important}button,input,label,select{font-size:18px}}.secret_box{background:#6f9550;border:0 solid #3b601d;border-radius:10px;padding:10px 25px;width:75%;margin:10px auto 20px}@media (max-width:450px){.secret_box{width:100%}}#ssbutton,#ssbutton:hover{box-shadow:inset 0 1px 0 0 #2e2e2e}#ssbutton{margin:0 auto;display:block;position:static;padding:12px 10px;background-color:#0083b2;color:#fff;text-align:center;-moz-border-radius:5px;-webkit-border-radius:5px;font-size:24px!important;border:0;font:700 20px/1 "Lucida Grande","Lucida Sans Unicode","Lucida Sans",Geneva,Verdana,sans-serif;text-shadow:0 -1px 1px #64799e}#ssbutton:hover{background-color:#de2600}#footer div,.legal_testim{font-size:11px;text-align:center}#footer div{padding:5px 0;line-height:15px;font-family:Arial,Helvetica,sans-serif}#footer #copyright a{color:#aaa;font-weight:400;text-decoration:none}.legal_testim{color:#aaa;max-width:700px;margin:40px auto 0;line-height:1.5em}@media (max-width:400px){.hide-es-country{display:none}#doktoro{width:160px!important}}.comeback_layout{display:none;position:fixed;color:#000;left:0;top:0;width:100%;height:100%;z-index:20000000;background:rgba(0,0,0,.75);overflow-y:scroll;-ms-overflow-style:none;overflow:-moz-scrollbars-none}.comeback_layout::-webkit-scrollbar{width:0}.comeback_wrapper{width:100%;max-width:550px;margin:0 auto}.comeback_container{background:url(img/comebackground.jpg) 0 0/100% 100% #fff;padding:25px;margin-top:2%;text-align:center;border-radius:25px}.comeback_container .btn{display:block;width:240px;color:#fff;background:#f82a5e;text-transform:uppercase;padding:10px 0;font-size:19px;font-weight:400;line-height:1.42857143;text-align:center;vertical-align:middle;border:1px solid transparent;border-radius:4px;margin:0 auto;text-decoration:none}.comeback_img{width:100%;margin:10px auto;max-width:200px}.comeback_close{float:right}#comeback p{font-size:16px}@media (max-width:700px){.comeback_container h1{line-height:18px;font-size:16px}.comeback_img{margin:5px auto}.comeback_container p{line-height:14px;font-size:15px}.comeback_container{padding:15px}}#block1,#block2{float:left;display:block;width:130px;margin:2px}#block2{width:165px}@font-face{font-family:iconfont;src:url(assets/iconfont.eot);src:url(assets/iconfont2.eot) format("embedded-opentype"),url(assets/iconfont.woff2) format("woff2"),url(assets/iconfont.ttf) format("truetype"),url(assets/iconfont.woff) format("woff"),url(assets/iconfont.svg) format("svg");font-weight:400;font-style:normal;font-display:block}.en .lang-switcher--en,.es .lang-switcher--es{cursor:default;background-color:#de2600}.imginch,.imginch:before{position:absolute;border-radius:100%}.imginch{top:inherit;left:inherit;bottom:4%;right:8%;background:#de2600;outline-offset:-10px;width:140px;height:140px;text-align:center}.imginch:before{content:"";border:3px solid #fff;width:94%;height:94%;top:3%;right:3%;z-index:5}.imginch p{display:inline-block;text-align:center;font-size:28px;font-weight:700;line-height:30px;width:130px;height:60px;margin:40px 0 0!important}.imginch p span{font-size:52px}.imginchdiv{position:relative;max-width:400px;margin:0 auto}
    </style>
</head>

<body class="ow-h en">
    <div id="headertheme" class="domain-ss">
        <h1 style="font-size: 26pt;">
            <span class="en">
                Enlarge your penis at least <?php echo round($lengthIncrease * 1.0, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?> in just <?php echo round($daysVar * 1.0, 0) ?> days, get rock hard erections and make your girl cum
                at least 5 times in a row<br>
                - guaranteed effects, medically proven.
            </span>
            <span class="es">
                Agrande su pene al menos <?php echo round($lengthIncrease * 1.0, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> en solo <?php echo round($daysVar * 1.0, 0) ?> días, obtenga erecciones duras como una roca y haga que
                su chica se corra al menos 5 veces seguidas - efectos garantizados, médicamente probados.
            </span>
        </h1>
    </div>
    <div id="wrapper" class="domain-ss">
        <div id="site-settings-wrap">
            <div style="font-size: 17px; font-style: italic; color: #888;">
                <span class="en">
                    Published:
                </span>
                <span class="es">
                    Publicado:
                </span>
                <?php echo date("M j, Y", mktime(0, 0, 0, date('m'), date('d') - 2, date('Y'))); ?>
            </div>
            <span id="site-settings-button" class="site-settings">
                <span class="en">USA </span>
                <span class="hide-es-country es">Estados Unidos </span>
                <span class="flag-small flag-usa" title="English"></span>
                <span id="site-settings-cross"> &#9660;</span>
            </span>
            <div id="site-settings-menu" class="site-settings-menu-none">
                <span class="site-settings en">
                    <span class="flag-small flag-usa" title="English"></span>
                    <span class="en" style="font-weight:normal;"> Country : </span> USA
                </span>
                <span class="site-settings es">
                    <span class="flag-small flag-usa" title="English"></span>
                    <span class="es" style="font-weight:normal;"> Pais : </span> Estados Unidos
                </span>
                <span class="site-settings en">
                    <span class="flag-small flag-gb" title="English"></span>
                    <span class="en" style="font-weight:normal;"> Language : </span> English
                </span>
                <span class="site-settings es">
                    <span class="flag-small flag-es" title="English"></span>
                    <span class="es" style="font-weight:normal;"> Idioma : </span> Español
                </span>
                <hr>
                <span id="switcher-en" class="site-settings lang-switcher lang-switcher--en">
                    <span class="flag-small flag-gb" title="English"></span>
                    English
                </span>
                <span id="switcher-es" class="site-settings lang-switcher lang-switcher--es">
                    <span class="flag-small flag-es" title="English"></span>
                    Español
                </span>
            </div>
        </div>
        <h2 style="margin-top: 5px;text-transform:uppercase;">
            <span class="en">
                NOW WITH ISO 9001 CERTIFICATION
            </span>
            <span class="es">
                AHORA CON CERTIFICACIÓN ISO 9001
            </span>
        </h2>
        <a href="<?= $offerLink ?>">
            <img alt="" id="doktoro" class="lefto lefto-img" style="
                    width: 200px;
                    margin-right: 20px;
                " src="img/doktorosecond.jpg" />
        </a>
        <p class="p-lefto-img" style="margin-top:0">
            <span class="en">
                I'm professor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?> and I want to show you a scientific method to increase the size of the
                cavernosa, enlarge your penis and get huge erections. The results of this method are clear: your penis
                will
                be bigger and
                thicker, your erections will last longer, you'll improve your sex life, providing your partner with at least
                5
                continuous orgasms. Instead of giving promises, I offer you the medical and lab results that prove that this
                product will
                increase your masculinity and enlarge your erection for up to 30 to 40 more minutes.
            </span>
            <span class="es">
                Soy el profesor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?> y quiero mostrarle un método científico para aumentar el tamaño de los cuerpos cavernosos,
                agrandar su pene y conseguir grandes erecciones. Los resultados de este método son claros: su pene será más grande y grueso,
                sus erecciones durarán más, mejorará su vida sexual, proporcionando a su pareja al menos 5 orgasmos continuos. En lugar de
                hacer promesas, le ofrezco resultados médicos y de laboratorio que prueban que este producto aumentará su masculinidad y
                agrandará su erección de 30 a 40 minutos más.
            </span>
        </p>
        <div id="description-quest">
            <?php
            //список месяцев с названиями для заменын на испанском                
            $_monthsList = array(
                "01" => "enero", "02" => "febrero",
                "03" => "marzo", "04" => "abril", "05" => "mayo", "06" => "junio",
                "07" => "julio", "08" => "agosto", "09" => "septiembre",
                "10" => "octubre", "11" => "noviembre", "12" => "diciembre"
            );
            // нужная дата
            $requiredDate = date("m j", mktime(0, 0, 0, date('m'), date('d') + 7, date('Y')));
            $part = explode(" ", $requiredDate);

            if ($city == 'Unknown' || empty($city)) {
                $city = '';
                $content = '<p style="clear: both; margin-top: 35px; margin-bottom: -15px;"><strong>
                                    <span class="en">Answer all the questions in the test and you will help with the current research and get a discount on the bottle. Questions prepared by Professor '.$firstVarNameEn.' '.$firstVarSurnameEn.'.</span>
                                    <span class="es">Conteste todas las preguntas en la prueba y ayudará con la investigación actual y obtendrá un descuento en la botella. Preguntas preparadas por el profesor '.$firstVarNameEn.' '.$firstVarSurnameEn.'.</span>
                                </strong></p>';
                echo $content;
            } else if (!empty($city)) {
                $content = '<p style="clear: both; margin-top: 35px; margin-bottom: -15px;"><strong>
                                    <span class="en">A test is available for ' . $city . ' residents until ' . date("F j", mktime(0, 0, 0, date('m'), date('d') + 7, date('Y'))) . '.</span>
                                    <span class="es">La prueba está disponible para los residentes de ' . $city . ' hasta el ' . $part[1] . ' de ' . $_monthsList[$part[0]] . '.</span>
                                </strong></p>
                                <p style="clear: both; margin-top: 20px; margin-bottom: -15px;">
                                    <span class="en">Answer all the questions in the test and you will help with the current research and get a discount on the bottle. Questions prepared by Professor '.$firstVarNameEn.' '.$firstVarSurnameEn.'.</span>
                                    <span class="es">Conteste todas las preguntas en la prueba y ayudará con la investigación actual y obtendrá un descuento en la botella. Preguntas preparadas por el profesor '.$firstVarNameEn.' '.$firstVarSurnameEn.'.</span>
                                </p>';
                echo $content;
            }
            ?>
        </div>


        <section data-quiz-item id="next-quest" class="dontUsed">
            <div class="question-num">
                <span class="en">Question 1 of 6</span>
                <span class="es">Pregunta 1 de 6</span>
            </div>
            <div class="question">
                <span class="en">By how many <?php echo ($measureUnitEn . $endingEn) ?> do you want to enlarge your penis?</span>
                <span class="es">¿Cuántas <?php echo ($measureUnitEs . $endingEs) ?> quiere agrandar su pene?</span>
            </div>

            <!-- <div class="choices">
                <input name="0" id="0_0" type="radio">
                <label for="0_0">
                    <span class="en">5 inches</span>
                    <span class="es">5 pulgadas</span>
                </label>
                <input name="0" id="0_1" type="radio">
                <label for="0_1">
                    <span class="en">3 inches</span>
                    <span class="es">3 pulgadas</span>
                </label>
                <input name="0" id="0_2" type="radio">
                <label for="0_2">
                    <span class="en">1 inch</span>
                    <span class="es">1 pulgada</span>
                </label>
            </div> -->

            <div class="choices" data-choices='["<span class=en><?php echo round($lengthIncrease * 1.2, 0) ?> <?php echo ($measureUnitEn . $endingEn) ?></span><span class=es><?php echo round($lengthIncrease * 1.2, 0) ?>  <?php echo ($measureUnitEs . $endingEs) ?></span>","<span class=en><?php echo round($lengthIncrease * 0.7, 0) ?> <?php echo ($measureUnitEn . $endingEn) ?></span><span class=es><?php echo round($lengthIncrease * 0.7, 0) ?> <?php echo ($measureUnitEs . $endingEs) ?></span>","<span class=en><?php echo round($lengthIncrease * 0.23, 0) ?> <?php echo ($measureUnitEn) ?></span><span class=es><?php echo round($lengthIncrease * 0.23, 0) ?> <?php echo ($measureUnitEs) ?></span>"]'>
            </div>
            <div class="stock stock-title"><b>
                    <span class="en">THANKS FOR YOUR ANSWERS</span>
                    <span class="es">GRACIAS POR LAS RESPUESTAS</span>
                </b></div>
            <div class="stock stock-text">
                <span class="en">Your answers will help in the research of Professor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
                <span class="es">Sus respuestas ayudarán en la investigación del profesor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
            </div>
            <div class="stock stock-text">
                <span class="en">At the moment the priority in the study was given to the age group of <b><span class="howold-div"></span></b></span>
                <span class="es">La prioridad en el estudio en este momento se dio al grupo de edad de <b><span class="howold-div"></span></b></span>
            </div>
            <div class="stock stock-text">
                <span class="en">You have reached the <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">target
                        audience</span></span>
                <span class="es">Ha llegado al <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">público objetivo</span></span>
            </div>
            <div class="stock stock-text">
                <span class="en">This age group gets a <b>50% discount</b> on <b><?php echo ($productName) ?></b></span>
                <span class="es">Este grupo de edad obtiene <b>un 50% de descuento</b> en <b><?php echo ($productName) ?></b></span>
            </div>
            <a href="<?= $offerLink ?>" class="stock stock-button">
                <span class="en">Get your discount</span>
                <span class="es">Obtenga su descuento</span>
            </a>
        </section>


        <div class="clear"></div>
        <p><strong>
                <span class="en">
                    Doesn't matter if it's the first or tenth time you try to end this embarrassing problem: I have the
                    greatest news for you, better than any other thing you've read about methods to enlarge your
                    penis.
                </span>
                <span class="es">
                    No importa si es la primera o la décima vez que intenta acabar con este vergonzoso problema:
                    tengo la mejor noticia para usted, mejor que cualquier otra cosa que haya leído sobre otros métodos para agrandar tu pene.
                </span>
            </strong></p>
        <p>
            <span class="en">
                If you have tried to enlarge your penis or fix your erectile dysfunction, you already know that the
                weights
                and pumps are worthless, and everything is as embarrassing as it was before. But now I will help you
                end
                this suffering whenever you take off your pants in front of a girl.
            </span>
            <span class="es">
                Si ha intentado agrandar su pene o corregir su disfunción eréctil, ya sabe que las pesas y las bombas
                son inútiles, y todo es tan vergonzoso como antes. Pero debe saber que le ayudaré a terminar con este
                sufrimiento cada vez que se quite los pantalones frente a una chica.
            </span>
        </p>
        <p>
            <span class="en">
                On the other hand, if it's your first time trying to enlarge your masculinity or fix ED, then you are
                going
                to skip so much embarrassment and rejection from women. They will fall in love with your penis
                and
                will want it inside of them.
            </span>
            <span class="es">
                Por otro lado, si es la primera vez que intenta agrandar su masculinidad o corregir la disfunción eréctil,
                entonces evitará la vergüenza y rechazo de las mujeres. Porque se enamorarán de su pene y lo querrán dentro de ellas.
            </span>
        </p>
        <p>
            <span class="en">
                You will also save hundreds of dollars that you would end up wasting for useless products.
            </span>
            <span class="es">
                También ahorrará cientos de dólares que terminaría desperdiciando en productos inútiles.
            </span>
        </p>
        <p class="mark">
            <span class="en">
                I want to show you real photos of Martin, who, with the help of my method, grew his penis up to
                <?php echo round($lengthIncrease * 0.84, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?> and prolonged his sexual relations up to 32 minutes.
            </span>
            <span class="es">
                Quiero mostrarle fotos reales de Martin, quien, con la ayuda de mi método, hizo crecer su pene hasta
                <?php echo round($lengthIncrease * 0.84, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> y prolongó sus relaciones sexuales hasta 32 minutos.
            </span>
        </p>
        <div class="clear"></div>
        <div class="effects">
            <div class="phot">
                <a href="<?= $offerLink ?>"><img data-src="img/mainsecond3.png" /></a>
            </div>
            <div class="txt">
                <h4>
                    <span class="en">
                        The documented results of Martin's 4-week treatment:
                    </span>
                    <span class="es">
                        Los resultados documentados del tratamiento de 4 semanas de Martin:
                    </span>
                </h4>
                <br />
                <ul class="list0 en">
                    <li><strong>He grew his penis <?php echo round($lengthIncrease * 0.84, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?> without using pumps or weights.</strong></li>
                    <li>His penis grew thicker by a 63% and he can have sex at least 5 continuous times.</li>
                    <li><strong>He achieved steel hard erections everytime he wanted to have sex.</strong></li>
                    <li>Keeps a long-lasting powerful erection, providing his partner with amazing orgasms.</li>
                    <li><strong>His libido improved as well as his testosterone levels, also more energy and
                            endurance in bed.</strong></li>
                </ul>
                <ul class="list0 es">
                    <li><strong>Le creció el pene <?php echo round($lengthIncrease * 0.84, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> sin usar bombas ni pesas.</strong></li>
                    <li>Su pene se hizo más grueso en un 63% y puede tener relaciones sexuales al menos 5 veces
                        seguidas.</li>
                    <li><strong>Logró erecciones duras como el acero cada vez que quería tener sexo.</strong></li>
                    <li>Mantiene una poderosa erección duradera, proporcionando a su pareja orgasmos increíbles.</li>
                    <li><strong>Su libido mejoró al igual que sus niveles de testosterona, incluida más energía y
                            resistencia en la cama.</strong></li>
                </ul>
            </div>
        </div>

        <section data-quiz-item id="next-quest" class="dontUsed">
            <div class="question-num">
                <span class="en">Question 2 of 6</span>
                <span class="es">Pregunta 2 de 6</span>
            </div>
            <div class="question">
                <span class="en">How old are you?</span>
                <span class="es">¿Qué edad tiene usted?</span>
            </div>
            <!-- <div class="choices">
                <input name="1" id="1_0" type="radio" value="18-30" onclick="Howold(this.value)">
                <label for="1_0">18-30</label>
                <input name="1" id="1_1" type="radio" value="31-45" onclick="Howold(this.value)">
                <label for="1_1">31-45</label>
                <input name="1" id="1_2" type="radio" value="46-60" onclick="Howold(this.value)">
                <label for="1_2">46-60</label>
                <input name="1" id="1_3" type="radio" value="60+" onclick="Howold(this.value)">
                <label for="1_3">60+</label>
            </div> -->
            <div class="choices" data-choices='["18-30","31-45","46-60","60+"]'></div>
            <div class="stock stock-title"><b>
                    <span class="en">THANKS FOR YOUR ANSWERS</span>
                    <span class="es">GRACIAS POR LAS RESPUESTAS</span>
                </b></div>
            <div class="stock stock-text">
                <span class="en">Your answers will help in the research of Professor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
                <span class="es">Sus respuestas ayudarán en la investigación del profesor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
            </div>
            <div class="stock stock-text">
                <span class="en">At the moment the priority in the study was given to the age group of <b><span class="howold-div"></span></b></span>
                <span class="es">La prioridad en el estudio en este momento se dio al grupo de edad de <b><span class="howold-div"></span></b></span>
            </div>
            <div class="stock stock-text">
                <span class="en">You have reached the <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">target
                        audience</span></span>
                <span class="es">Ha llegado al <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">público objetivo</span></span>
            </div>
            <div class="stock stock-text">
                <span class="en">This age group gets a <b>50% discount</b> on <b><?php echo ($productName) ?></b></span>
                <span class="es">Este grupo de edad obtiene <b>un 50% de descuento</b> en <b><?php echo ($productName) ?></b></span>
            </div>
            <a href="<?= $offerLink ?>" class="stock stock-button">
                <span class="en">Get your discount</span>
                <span class="es">Obtenga su descuento</span>
            </a>
        </section>
        <script>
            function Howold(Value) {
                let howold = Value;
                let howoldCookie;
                let howolddiv = document.querySelectorAll('.howold-div');
                for (i = 0; i < howolddiv.length; i++) {
                    if (howold == "18-30" || howold == "31-45") {
                        howolddiv[i].innerHTML = "18-45";
                        howoldCookie = "18-45";
                    } else {
                        howolddiv[i].innerHTML = "45+";
                        howoldCookie = "45+";
                    }
                }

                // cookie
                var expires = new Date();
                expires.setDate(expires.getDate() + 7);
                expires.toUTCString();
                // var quizzPass = 'quizzpass';
                document.cookie = [
                    'howoldCookie=' + howoldCookie, '; expires=' + expires // используем expires, max-age не поддерживается в ИЕ
                    // , '; path=/'
                    , '; domain=' + document.location.host
                ].join('');
                // end cookie
            }
        </script>


        <div class="clear"></div>
        <h3>
            <span class="en">
                Martin's results aren't a miracle
            </span>
            <span class="es">
                Los resultados de Martin no son un milagro
            </span>
        </h3>
        <p>
            <span class="en">
                They are proven by many different medical tests. They measured the concentrations of testosterone and
                the
                quantity and size of the inner tissue of the penis of the volunteers, before and after the treatment.
                In
                the end, they
                repeated the process but included more people. The effectiveness of this method wasn't only proven with
                the
                volunteers of these tests, it was proven by real clients too. Their stories are always very emotional.
            </span>
            <span class="es">
                Están comprobados por muchas pruebas médicas diferentes. Midieron las concentraciones de testosterona y
                la
                cantidad y tamaño del tejido interno del organismo de los voluntarios, antes y después del tratamiento.
                Al
                final, repitieron el proceso pero incluyeron más personas. La eficacia de este método no solo se
                demostró
                con los voluntarios de estas pruebas, también lo demostraron clientes reales. Sus historias son siempre
                muy
                emotivas.
            </span>
        </p>
        <div class="en">
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot001.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.62, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>With <?php echo ($productName) ?> he became really POWERFUL</strong></p>
                    <p>There's no flame in bed? After taking this pill, I no longer have space for tiredness when in
                        bed.
                        I'm <?php echo ($ageVar[0]) ?> years old, <?php echo round($standardLength * 2.02, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?>, and just rediscovered sex!</p>
                    <p class="mark">
                        After a month of use I realized that they were just 100% confident in their product and after my
                        thirty day course ended I ordered more to get an even
                        better result and I never regret my decision. I've purchased many similar products without
                        getting
                        any results, and these are the only pills that have worked, proven by me and my friends.
                    </p>
                    <p class="mark">
                        Moreover, there is now a special offer: you can answer questions on the website and get a bottle
                        with a 50% discount, so I strongly recommend that you do not miss this opportunity!
                    </p>
                    <b><?php echo ($nameVarEn[0]) ?>, <?php echo ($ageVar[0]) ?> years</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot002.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.68, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>You must have it!</strong></p>
                    <p class="mark">
                        <?php echo ($productName) ?> is the best solution to get a powerful penis. If you take it, you'll have energy and
                        will always want to do it. You will have super sex, no women will ever forget you. With my <?php echo round($standardLength * 1.98, 1) ?>
                        <?php echo ($measureUnitEn . $endingEn) ?>
                        huge dick, no woman will
                        ever say no. Fully recommended!
                    </p>
                    <div class="imginchdiv">
                        <a href="<?= $offerLink ?>">
                            <img style="width: 100%; max-width: 400px;" data-src="img/stoit.jpg" />
                        </a>
                        <div class="imginch" style="right:5%;bottom:8%;">
                            <p><span>+<?php echo round($lengthIncrease * 0.68, 1) ?></span><br><?php echo ($measureUnitEn . $endingEn) ?></p>
                        </div>
                    </div>
                    <b><?php echo ($nameVarEn[1]) ?>, <?php echo ($ageVar[1]) ?> years</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot003.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 1.11, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>Can a man be happy with a <?php echo round($standardLength * 1.02, 1) ?> <?php echo ($measureUnitEn) ?> dick???</strong></p>
                    <p>It was my tragedy. I felt embarrassed while talking with women, I was afraid of them laughing at
                        me
                        during sex.</p>
                    <p>I read about these penis enlargement pills on a bodybuilding forum. I decided to try them just
                        out
                        of curiosity and because they gave a good discount, so I had nothing to lose.</p>
                    <p class="mark">The result: <span><?php echo round($lengthIncrease * 1.11, 1) ?> extra <?php echo ($measureUnitEn . $endingEn) ?> of dick and no more depression.</span> I wasn't
                        simply satisfied with this result, I was happy to my bones!!!</p>
                    <p>All the girls get wet when they see my "rod"</p>
                    <p>It's great that I ordered a bottle so cheap because it looks like the promotion will end soon</p>
                    <b><?php echo ($nameVarEn[2]) ?>, <?php echo ($ageVar[2]) ?> years</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot004.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 1.01, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>My wife wants to take me to bed</strong></p>
                    <p>I'm not gonna lie, I felt terrible when my wife didn't want to do it with me, and when she
                        finally
                        agreed, I could see in her eyes that she was already bored to death.</p>
                    <p>I finally decided to get these pills because you don't have to follow a strict diet or
                        any
                        kind of exercise plan, so almost no one noted great changes in my lifestyle.</p>
                    <p class="mark">
                        Thanks to these pills my penis grew up to <?php echo round($lengthIncrease * 1.01, 1) ?> extra <?php echo ($measureUnitEn . $endingEn) ?> and I can last longer in bed. My
                        erections were rock hard. Now I can make her cum at least 5 times in a row and I can hear her
                        scream
                        with pleasure.
                    </p>
                    <b><?php echo ($nameVarEn[3]) ?>, <?php echo ($ageVar[3]) ?> years</b>
                </div>
            </div>
            <div class="clear" id="last"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot010.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.75, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>It works!</strong></p>
                    <p>
                        My issue wasn't having a small penis because mine already was <?php echo round($standardLength * 1.43, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?> long. But, what was there to lose?
                        It was amazing how much it grew - up to <?php echo round($standardLength * 1.43 + $lengthIncrease * 0.75, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?>. Now, it's a real monster. I
                        believe that even people
                        from Africa don't have it as big as me. It barely fits in my pants, but women like to be
                        relentlessly fucked.
                    </p>
                    <p class="mark">I believe it didn't grow that much because I already had a good length. But still,
                        the
                        results are impressive.</p>
                    <b><?php echo ($nameVarEn[4]) ?>, <?php echo ($ageVar[4]) ?> years</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot005.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.8, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>The fastest method to enlarge your penis.</strong></p>
                    <p class="mark">
                        I like having everything in order, that's why every day I checked the results of the treatment.
                        The
                        first few days my penis grew <?php echo round($lengthIncrease * 0.08, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?>. A week later it grew an extra <?php echo ($measureUnitEn) ?> and in 14 days another
                        <?php echo round($lengthIncrease * 0.25, 1) ?>
                        <?php echo ($measureUnitEn . $endingEn) ?>. In total,
                        my penis grew an extra <?php echo round($lengthIncrease * 0.8, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?> in <?php echo round($daysVar * 1.0, 0) ?> days, and also, I got 60-minute erections. The results are
                        impressive.
                    </p>
                    <b><?php echo ($nameVarEn[5]) ?>, <?php echo ($ageVar[5]) ?> years</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot006.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.93, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>Goodbye to fake orgasms</strong></p>
                    <p class="mark">
                        Since I was a child, my friends laughed at my small penis in the pool. When I turned 18, I
                        started
                        flirting, but I felt insecure. I thought I was going to be rejected because of my <?php echo round($standardLength * 1.23, 1) ?> <?php echo ($measureUnitEn) ?> penis.
                        And
                        that's what
                        happened... By a stroke of luck, <?php echo ($productName) ?> made it grow faster. Before it was <?php echo round($standardLength * 1.23, 1) ?> <?php echo ($measureUnitEn) ?> during an
                        erection, now it's <?php echo round($standardLength * 1.23 + $lengthIncrease * 0.4, 1) ?> when flaccid! This really works.
                    </p>
                    <b><?php echo ($nameVarEn[6]) ?>, <?php echo ($ageVar[6]) ?> years</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot007.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.77, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>5 orgasms in 23 minutes</strong></p>
                    <p class="mark">
                        I never thought that I could increase my penis for a few dollars. Oh boy, did it grow. Now my
                        erections last 8 times longer. It's bigger and harder, and my girl loves it. This product is
                        amazing.
                        Now all my sessions end
                        with a big orgasmic scream. It always gets hard and never fails me!<br />
                    </p>
                    <div class="imginchdiv">
                        <a href="<?= $offerLink ?>">
                            <img style="width: 100%; max-width: 400px;" data-src="img/stena.jpg" />
                        </a>
                        <div class="imginch" style="top:4%;left:3%;bottom:inherit;right:inherit">
                            <p><span>+<?php echo round($lengthIncrease * 0.77, 1) ?></span><br><?php echo ($measureUnitEn . $endingEn) ?></p>
                        </div>
                    </div>
                    <b><?php echo ($nameVarEn[7]) ?>, <?php echo ($ageVar[7]) ?> years</b>
                </div>
            </div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot008.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.68, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>There's no better method to get a bigger dick</strong></p>
                    <p>Before I started using <?php echo ($productName) ?> I had many failed attempts, so much so, that I started feeling awful.
                        A
                        friend of mine recommended this product to me. It took a few moments just to recover my ability and
                        self-confidence.</p>
                    <p class="mark">It barely fits in their mouths and I'm always horny and looking for more. I'm no
                        longer
                        afraid of doing it, and I'm not ashamed of my <?php echo round($standardLength * 2.9, 1) ?> <?php echo ($measureUnitEn) ?> dick.</p>
                    <br />
                    <b><?php echo ($nameVarEn[8]) ?>, <?php echo ($ageVar[8]) ?> years</b>
                </div>
            </div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot009.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.65, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>A real python</strong></p>
                    <p class="mark">
                        I felt ashamed of having a small penis and now I can slap my girl’s face with a huge dick. It's
                        amazing! I penetrated her so hard, and it wasn't even all the way in. When I can hear her scream, it's
                        music
                        to my ears. That's what I
                        call sex.
                    </p>
                    <p>I would just like to thank <?php echo ($productName) ?> for finally showing me what real pleasure feels like!</p>
                    <div class="imginchdiv">
                        <a href="<?= $offerLink ?>">
                            <img style="width: 100%; max-width: 400px;" data-src="img/fot1101.jpg" />
                        </a>
                        <div class="imginch">
                            <p><span>+<?php echo round($lengthIncrease * 0.65, 1) ?></span><br><?php echo ($measureUnitEn . $endingEn) ?></p>
                        </div>
                    </div>
                    <b><?php echo ($nameVarEn[9]) ?>, <?php echo ($ageVar[9]) ?> years</b>
                </div>
            </div>
        </div>
        <div class="es">
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot001.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.62, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>Con <?php echo ($productName) ?> se volvió realmente PODEROSO</strong></p>
                    <p>¿No hay fuego en la cama? Después de tomar esta píldora, ya no tengo espacio para el cansancio
                        cuando
                        estoy en la cama. ¡Tengo <?php echo ($ageVar[0]) ?> años, mi pene mide <?php echo round($standardLength * 2.02, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> y acabo de redescubrir el sexo!</p>
                    <p class="mark">Después de un mes de uso, me di cuenta de que confiaban al 100% en su producto y después
                        de que terminó mi curso de treinta días pedí más para obtener un resultado aún mejor y nunca me arrepientí
                        de mi decisión. He comprado muchos productos parecidos sin obtener ningún resultado, y estas son las únicas
                        píldoras que han funcionado, probadas por mí y mis amigos.</p>
                    <p>Además, ahora hay una oferta especial: puede responder el cuestionario en el sitio web y obtener una
                        botella con un 50% de descuento, ¡así que le recomiendo que no pierda esta oportunidad!
                    </p>
                    <b><?php echo ($nameVarEn[0]) ?>, <?php echo ($ageVar[0]) ?> años</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot002.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.68, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>¡Debes tenerlo!</strong></p>
                    <p class="mark"><?php echo ($productName) ?> es la mejor solución para conseguir un pene potente. Si los toma, tendrá energía y
                        siempre querrá hacerlo. Tendrás supersexualidad, ninguna mujer te olvidará jamás. Con mi enorme polla
                        de <?php echo round($standardLength * 1.98, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?>, ninguna mujer dirá que no. ¡Totalmente recomendado!</p>
                    <div class="imginchdiv">
                        <a href="<?= $offerLink ?>">
                            <img style="width: 100%; max-width: 400px;" data-src="img/stoit.jpg" />
                        </a>
                        <div class="imginch" style="right:5%;bottom:8%;">
                            <p style="font-size: 24px;"><span>+<?php echo round($lengthIncrease * 0.68, 1) ?></span><br><?php echo ($measureUnitEs . $endingEs) ?></p>
                        </div>
                    </div>
                    <b><?php echo ($nameVarEn[1]) ?>, <?php echo ($ageVar[1]) ?> años</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot003.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 1.11, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>¿Puede un hombre ser feliz con una polla de <?php echo round($standardLength * 1.02, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?>?</strong></p>
                    <p>Fue mi tragedia. Me sentía avergonzado al hablar con mujeres, tenía miedo de que se rieran de mí
                        durante el sexo.</p>
                    <p class="mark">El resultado: <span><?php echo round($lengthIncrease * 1.11, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> extras de pene y no más depresión.</span> No estaba
                        simplemente satisfecho con este resultado, ¡estaba realmente feliz!</p>
                    <p>Todas las chicas se mojan cuando ven mi "manguera".</p>
                    <p>Es increíble que aún no haya ordenado la versión de prueba, porque parece que la promoción terminará pronto.</p>
                    <b><?php echo ($nameVarEn[2]) ?>, <?php echo ($ageVar[2]) ?> años</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot004.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 1.01, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>Mi esposa quiere llevarme a la cama</strong></p>
                    <p>No voy a mentir, me sentí fatal cuando mi esposa no quiso hacerlo conmigo, y cuando finalmente
                        accedió, pude ver en sus ojos que ya estaba aburrida.</p>
                    <p>Finalmente tomé la decisión de tomar estas pastillas, porque no hay que seguir una dieta estricta
                        ni
                        ningún tipo de ejercicio, por lo que casi nadie notó grandes cambios en mi estilo de vida.</p>
                    <p class="mark">Gracias a estas pastillas, mi pene creció hasta <?php echo round($lengthIncrease * 1.01, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> más y podía durar más
                        en la
                        cama. Mis erecciones eran como una roca. Ahora puedo hacer que se corra al menos 5 veces
                        seguidas y
                        puedo escucharla gritar de placer.</p>
                    <b><?php echo ($nameVarEn[3]) ?>, <?php echo ($ageVar[3]) ?> años</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot010.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.75, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>¡Funciona!</strong></p>
                    <p>Mi problema no era tener un pene pequeño porque el mío ya tenía <?php echo round($standardLength * 1.43, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> de largo. Pero, ¿qué
                        podría perder al intentarlo? Fue asombroso cuánto creció, hasta <?php echo round($standardLength * 1.43 + $lengthIncrease * 0.75, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?>. Ahora, es un
                        verdadero
                        monstruo, creo que incluso la gente de África no lo tiene tan grande como yo. Apenas cabe en mis
                        pantalones, pero a las mujeres les gusta que las follen sin descanso.</p>
                    <p class="mark">Creo que no creció tanto porque ya tenía una buena longitud. Pero aún así, los
                        resultados son impresionantes.</p>
                    <b><?php echo ($nameVarEn[4]) ?>, <?php echo ($ageVar[4]) ?> años</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot005.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.8, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>El método más rápido para agrandar su pene.</strong></p>
                    <p class="mark">Me gusta tener todo en orden, por eso todos los días revisaba los resultados del
                        tratamiento. Los primeros días mi pene creció <?php echo round($lengthIncrease * 0.08, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?>. Una semana más tarde creció una
                        <?php echo ($measureUnitEs) ?>
                        extra y en 14 días otras <?php echo round($lengthIncrease * 0.25, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?>. En total, mi pene creció <?php echo round($lengthIncrease * 0.8, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> extra en <?php echo round($daysVar * 1.0, 0) ?> días,
                        además, obtuve erecciones de 60 minutos. Los resultados son impresionantes.</p>
                    <b><?php echo ($nameVarEn[5]) ?>, <?php echo ($ageVar[5]) ?> años</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot006.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.93, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>Adiós a los orgasmos falsos</strong></p>
                    <p class="mark">Desde que era niño, mis amigos se reían de mi pequeño pene en la piscina. Cuando
                        cumplí
                        18, comencé a coquetear, pero me sentí inseguro porque pensé que por mi pene de <?php echo round($standardLength * 1.23, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> me iban
                        a rechazar. Y eso es lo que sucedió ... Por un golpe de suerte, <?php echo ($productName) ?> lo hizo crecer más rápido.
                        Antes medía <?php echo round($standardLength * 1.23, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> durante una erección, ¡ahora es <?php echo round($standardLength * 1.23 + $lengthIncrease * 0.4, 1) ?> cuando está flácido! Esto realmente
                        funciona.</p>
                    <b><?php echo ($nameVarEn[6]) ?>, <?php echo ($ageVar[6]) ?> años</b>
                </div>
            </div>
            <div class="clear"></div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot007.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.77, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>5 orgasmos en 23 minutos</strong></p>
                    <p class="mark">Nunca pensé que por unos pocos dólares podría aumentar mi pene. Oh, vaya, creció y
                        ahora
                        mis erecciones duran 8 veces más. Es más grande y más difícil y a mi chica le encanta. Este
                        producto
                        es asombroso. Ahora todas mis sesiones terminan con un gran grito de orgasmo. ¡Siempre se endurece y nunca me falla!<br></p>
                    <div class="imginchdiv">
                        <a href="<?= $offerLink ?>">
                            <img style="width: 100%; max-width: 400px;" data-src="img/stena.jpg" />
                        </a>
                        <div class="imginch" style="top:4%;left:3%;bottom:inherit;right:inherit;">
                            <p style="font-size: 24px;"><span>+<?php echo round($lengthIncrease * 0.77, 1) ?></span><br><?php echo ($measureUnitEs . $endingEs) ?></p>
                        </div>
                    </div>
                    <b><?php echo ($nameVarEn[7]) ?>, <?php echo ($ageVar[7]) ?> años</b>
                </div>
            </div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot008.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.68, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>No hay mejor método para conseguir una polla más grande</strong></p>
                    <p>Antes de comenzar a usar <?php echo ($productName) ?> tuve muchos intentos fallidos, tanto que comencé a sentirme
                        fatal.
                        Un amigo me recomendó este producto. Me tomó unos momentos recuperar mi capacidad y la confianza
                        en
                        mí mismo.</p>
                    <p class="mark">Apenas caben en sus bocas y siempre estoy cachondo y buscando más. Ya no tengo miedo
                        de
                        hacerlo, y no me avergüenzo de mi pene de <?php echo round($standardLength * 2.9, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?>.</p>
                    <br><b><?php echo ($nameVarEn[8]) ?>, <?php echo ($ageVar[8]) ?> años</b>
                </div>
            </div>
            <div class="forfoto">
                <div class="rel">
                    <a href="<?= $offerLink ?>"><img data-src="img/fot009.jpg" class="lefto"></a>
                    <p class="kga">+<?php echo round($lengthIncrease * 0.65, 1) ?><?php echo($alternativeVar) ?></p>
                    <div class="relclear"></div>
                </div>
                <div class="txt">
                    <p><strong>Una anaconda real</strong></p>
                    <p class="mark">Tenía miedo de que la gente se riera de mí, así que pedí la versión de prueba de
                        <?php echo ($productName) ?>. Me sentí avergonzado de tener un pene pequeño y ahora puedo abofetear con mi polla
                        enorme la cara de mi chica. ¡Es asombroso! La penetro tan fuerte, y no estaba completamente insertada,
                        puedo escucharla gritar. Es música para mis oídos. Eso es lo que yo llamo sexo.</p>
                    <p>¡Solo me gustaría agradecer a <?php echo ($productName) ?> por finalmente mostrarme cómo se siente el verdadero
                        placer!
                    </p>
                    <div class="imginchdiv">
                        <a href="<?= $offerLink ?>">
                            <img style="width: 100%; max-width: 400px;" data-src="img/fot1101.jpg" />
                        </a>
                        <div class="imginch">
                            <p style="font-size: 24px;"><span>+<?php echo round($lengthIncrease * 0.65, 1) ?></span><br><?php echo ($measureUnitEs . $endingEs) ?></p>
                        </div>
                    </div>
                    <b><?php echo ($nameVarEn[9]) ?>, <?php echo ($ageVar[9]) ?> años</b>
                </div>
            </div>
        </div>
        <br />
        <div class="secret_box en">
            <h3>Try Before You Buy</h3>
            <p>Because it is a scientific method, Professor <?php echo ($firstVarSurnameEn) ?> is concerned with results, not promises.</p>
            <p>This is Professor <?php echo ($firstVarSurnameEn) ?>'s personal guarantee, backed up by the manufacturer of the product - so you
                have nothing to risk!</p>
            <p>But there is a condition: when you get these results, tell your friends about it so that they also know
                about <?php echo ($productName) ?> !</p>
        </div>
        <div class="secret_box es">
            <h3>Pruebe antes de comprar</h3>
            <p>Debido a que es un método científico, al profesor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?> le preocupan los resultados, no las promesas.
            </p>
            <p>Esta es la garantía personal del profesor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?>, respaldada por el fabricante del producto, ¡así que no
                tiene nada que arriesgar!</p>
            <p>Pero hay una condición: cuando obtenga estos resultados, dígaselo a sus amigos para que ellos también
                sepan sobre <?php echo ($productName) ?>.</p>
        </div>
        <div class="clear"></div>
        <h3 style="text-transform: uppercase;">
            <span class="en">
                HOW TO INCREASE YOUR PENIS AN EXTRA <?php echo round($lengthIncrease * 1.0, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?> AND LAST LONGER, USING A
                SCIENTIFIC METHOD?
            </span>
            <span class="es">
                ¿CÓMO AUMENTAR SU PENE <?php echo round($lengthIncrease * 1.0, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> ADICIONALES Y DURAR MÁS USANDO UN
                MÉTODO CIENTÍFICO?
            </span>
        </h3>
        <p>
            <span class="en">
                You won't even remember the time you had a <?php echo round($standardLength * 1.03, 1) ?> <?php echo ($measureUnitEn) ?> penis, and the way you felt ashamed when your partner saw
                it.
                This is what you have to do to make your penis increase and to give her 5 orgasms in a row.
            </span>
            <span class="es">
                Ni siquiera recordará cuando tenía un pene de <?php echo round($standardLength * 1.03, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> e incluso cuando se sintió avergonzado cuando
                su pareja lo vio. Esto es lo que tiene que hacer para hacer que su pene aumente y tener 5 orgasmos seguidos.
            </span>
        </p>
        <center>
            <a href="<?= $offerLink ?>"><img style="width: 100%; max-width: 400px;" data-src="img/posilka.jpg" /></a>
        </center>
        <p>
            <span class="en">
                it's easy. You just need to take a pill a day before sex, and to get better results, take one every day.
                Take one
                during breakfast and another during dinner time. After doing that, continue your life as usual, but you
                will start feeling your organism functioning in a very different way. You won't have to change your
                diet, no more pumps
                or special exercises; your organism will make your cavernosa grow in size.
            </span>
            <span class="es">
                Es fácil, solo necesita tomar una pastilla un día antes de tener relaciones sexuales, y para obtener
                mejores resultados, tome una todos los días. Uno durante el desayuno y otro durante la cena. Después
                de hacer eso, continúe su vida como de costumbre, pero comenzará a sentir que su organismo funciona de
                una manera muy diferente. No tendrá que cambiar su dieta, no más bombas ni ejercicios especiales; su
                organismo hará que sus cuerpos cavernosos crezcan en tamaño.
            </span>
        </p>

        <section data-quiz-item id="next-quest" class="dontUsed">
            <div class="question-num">
                <span class="en">Question 3 of 6</span>
                <span class="es">Pregunta 3 de 6</span>
            </div>
            <div class="question">
                <span class="en">Do you want your wife to experience an orgasm every time?</span>
                <span class="es">¿Quiere que su esposa experimente el orgasmo cada vez?</span>
            </div>
            <!-- <div class="choices">
                <input name="2" id="2_0" type="radio">
                <label for="2_0">
                    <span class="en">Yes</span>
                    <span class="es">Sí</span>
                </label>
                <input name="2" id="2_1" type="radio">
                <label for="2_1">No</label>
            </div> -->
            <div class="choices" data-choices='["<span class=en>Yes</span><span class=es>Sí</span>","No"]'></div>
            <div class="stock stock-title"><b>
                    <span class="en">THANKS FOR YOUR ANSWERS</span>
                    <span class="es">GRACIAS POR LAS RESPUESTAS</span>
                </b></div>
            <div class="stock stock-text">
                <span class="en">Your answers will help in the research of Professor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
                <span class="es">Sus respuestas ayudarán en la investigación del profesor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
            </div>
            <div class="stock stock-text">
                <span class="en">At the moment the priority in the study was given to the age group of <b><span class="howold-div"></span></b></span>
                <span class="es">La prioridad en el estudio en este momento se dio al grupo de edad de <b><span class="howold-div"></span></b></span>
            </div>
            <div class="stock stock-text">
                <span class="en">You have reached the <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">target
                        audience</span></span>
                <span class="es">Ha llegado al <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">público objetivo</span></span>
            </div>
            <div class="stock stock-text">
                <span class="en">This age group gets a <b>50% discount</b> on <b><?php echo ($productName) ?></b></span>
                <span class="es">Este grupo de edad obtiene <b>un 50% de descuento</b> en <b><?php echo ($productName) ?></b></span>
            </div>
            <a href="<?= $offerLink ?>" class="stock stock-button">
                <span class="en">Get your discount</span>
                <span class="es">Obtenga su descuento</span>
            </a>
        </section>

        <p class="mark">
            <span class="en">
                This process isn't a miracle, it's simply a scientific method working to improve masculinity. The
                special,
                scientific blend of herbs will increase your penis size and make it hard for up to 2 hours. <?php echo ($productName) ?> also
                increases your testosterone, thickens your veins, improves blood flow and libido.
            </span>
            <span class="es">
                Este proceso no es un milagro, es simplemente un método
                científico que trabaja para mejorar la masculinidad. La mezcla científica y especial de hierbas
                aumentará el
                tamaño de su pene y lo endurecerá hasta por 2 horas. <?php echo ($productName) ?> también aumenta su testosterona, espesa sus
                venas, mejora el flujo sanguíneo y la libido.
            </span>
        </p>

        <ul class="typicallist en">
            <li>Your penis will grow at least an extra <?php echo round($lengthIncrease * 1.0, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?> in <?php echo round($daysVar * 1.0, 0) ?> days. Instead of feeling insecure in bed, you'll
                feel horny, full of passion and desire, and ready to do anything.</li>
            <li>Say goodbye to your flaccid erections! It's going to be so hard and ready to satisfy any kind of sexual
                desire, any time, any place.</li>
            <li>All your sessions will end with big orgasms. The looks of disappointment will be over. Never again will you hear
                the dreadful "That's it?". She will have several minutes of climax and will need even more time to fully recover...
            </li>
        </ul>
        <ul class="typicallist es">
            <li>Su pene crecerá en promedio al menos <?php echo round($lengthIncrease * 1.0, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> adicionales en <?php echo round($daysVar * 1.0, 0) ?> días. En lugar de sentirte inseguro en la cama,
                te sentirás cachondo, lleno de pasión y deseo, y listo para hacer cualquier cosa.
            </li>
            <li>¡Dile adiós a tus erecciones flácidas! Va a estar tan duro y listo para satisfacer cualquier tipo de deseo
                sexual, SIEMPRE y EN CUALQUIER LUGAR.
            </li>
            <li>Todas tus sesiones terminarán con grandes orgasmos. Se acabarán las miradas de engaño y también el
                espantoso "¿Eso es todo?". Tendrá varios minutos de placer y necesitará aún más tiempo para recuperarse
                por completo ...
            </li>
        </ul>
        <br>

        <h4 style="font-size: 1.1em;">
            <span class="en">
                The effects of the treatment with the <?php echo ($productName) ?> pills were measured using statistical tests. The results are
                represented by percentages.
            </span>
            <span class="es">
                Los efectos del tratamiento con las píldoras <?php echo ($productName) ?> se midieron mediante pruebas estadísticas. Los
                resultados están representados por porcentajes.
            </span>
        </h4>
        <div class="graph en">
            <a href="<?= $offerLink ?>"><img data-src="img/graph.jpg" alt="" /></a>
            <div class="beforetxt" data="50.html" style="width: 34%;">
                <span class="en">Erection time</span>
            </div>
            <div class="txt" data="93.html" style="width: 66%;">
                <span class="en">Improvement</span>
                <span style="font-weight: bold;">+93%</span>
            </div>
            <div class="beforetxt" data="50.html" style="width: 43%;">
                <span class="en">Frequency of partner’s orgasms</span>
            </div>
            <div class="txt" data="89.html" style="width: 82%;">
                <span class="en">Number improvement</span>
                <span style="font-weight: bold;">+89%</span>
            </div>
            <div class="beforetxt" data="50.html" style="width: 41%;">
                <span class="en">Levels of testosterone</span>
            </div>
            <div class="txt" data="69.html" style="width: 70%;">
                <span class="en">Improvement</span>
                <span style="font-weight: bold;">+69%</span>
            </div>
            <div class="beforetxt" data="50.html" style="width: 36%;">
                <span class="en">Penis length</span>
            </div>
            <div class="txt" data="84.html" style="width: 67%;">
                <span class="en">Enlargement</span>
                <span style="font-weight: bold;">+84%</span>
            </div>
            <div class="beforetxt" data="50.html" style="width: 33%;">
                <span class="en">Penis Girth</span>
            </div>
            <div class="txt" data="65.html" style="width: 55%;">
                <span class="en">Thickening</span>
                <span style="font-weight: bold;">+65%</span>
            </div>
            <div class="beforetxt" data="50.html" style="width: 40%;">
                <span class="en">Sexual act timespan</span>
            </div>
            <div class="txt" data="49.html" style="width: 63%;">
                <span class="en">Improved</span>
                <span style="font-weight: bold;">+57%</span>
            </div>
        </div>
        <div class="graph halfborder en">
            <div class="numbers">
                <div>
                    <span class="en">Min</span>
                </div>
                <div>
                    <hr color="#aaa" size="10px" style="border:none;margin:0 auto;width: 2px;" />
                    <span style="margin-top: 0" class="en">Statistic Norm</span>
                </div>
                <div>
                    <span class="en">Max</span>
                </div>
            </div>
        </div>
        <div class="graph es">
            <a href="<?= $offerLink ?>"><img data-src="img/graph.jpg" alt="" /></a>
            <div class="beforetxt" data="50.html" style="width: 34%;">
                <span class="es">Tiempo de erección</span>
            </div>
            <div class="txt" data="93.html" style="width: 66%;">
                <span class="es">Mejora</span>
                <span style="font-weight: bold;">+93%</span>
            </div>
            <div class="beforetxt" data="50.html" style="width: 43%;">
                <span class="es">Orgasmos que tiene tu pareja</span>
            </div>
            <div class="txt" data="89.html" style="width: 82%;">
                <span class="es">Mejora del número</span>
                <span style="font-weight: bold;">+89%</span>
            </div>
            <div class="beforetxt" data="50.html" style="width: 41%;">
                <span class="es">Niveles de testosterona</span>
            </div>
            <div class="txt" data="69.html" style="width: 70%;">
                <span class="es">Mejora</span>
                <span style="font-weight: bold;">+69%</span>
            </div>
            <div class="beforetxt" data="50.html" style="width: 36%;">
                <span class="es">Longitud del pene</span>
            </div>
            <div class="txt" data="84.html" style="width: 67%;">
                <span class="es">Ampliación</span>
                <span style="font-weight: bold;">+84%</span>
            </div>
            <div class="beforetxt" data="50.html" style="width: 33%;">
                <span class="es">Espesor del Pene</span>
            </div>
            <div class="txt" data="65.html" style="width: 55%;">
                <span class="es">Engrosamiento</span>
                <span style="font-weight: bold;">+65%</span>
            </div>
            <div class="beforetxt" data="50.html" style="width: 40%;">
                <span class="es">Tiempo para las relaciones sexuales</span>
            </div>
            <div class="txt" data="49.html" style="width: 63%;">
                <span class="es">Mejorar</span>
                <span style="font-weight: bold;">+57%</span>
            </div>
        </div>
        <div class="graph halfborder es">
            <div class="numbers">
                <div>
                    <span class="es">mínimo</span>
                </div>
                <div>
                    <hr color="#aaa" size="10px" style="border:none;margin:0 auto;width: 2px;" />
                    <span style="margin-top: 0" class="es">Norma Estadística</span>
                </div>
                <div>
                    <span class="es">máximo</span>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
        <h3>
            <span class="en">The most important reason why you should order <?php echo ($productName) ?> right now</span>
            <span class="es">La razón más importante por la que debe pedir <?php echo ($productName) ?> ahora mismo</span>
        </h3>
        <p class="en">
            Now, you will believe that you just found the solution for your embarrassment and insecurity in bed due to
            your small penis. I know, because I also felt that when I tried my method years ago. But I’m asking you not to order
            <?php echo ($productName) ?> just yet.
        </p>
        <p class="es">
            Ahora, creerá que acaba de encontrar la solución para su vergüenza e inseguridad en la cama debido a tu pene pequeño.
            Lo sé, porque también lo sentí cuando probé mi método hace años. Pero les pido que no pidan
            <?php echo ($productName) ?> todavía.
        </p>
        <div class="imginchdiv">
            <a href="<?= $offerLink ?>">
                <img style="width: 100%; max-width: 400px;" data-src="img/vannaya.jpg" />
            </a>
            <div class="imginch en" style="bottom:5%;right:1%;">
                <p><span>+<?php echo round($lengthIncrease * 0.62, 1) ?></span><br><?php echo ($measureUnitEn . $endingEn) ?></p>
            </div>
            <div class="imginch es" style="bottom:5%;right:1%;">
                <p style="font-size:24px"><span>+<?php echo round($lengthIncrease * 0.62, 1) ?></span><br><?php echo ($measureUnitEs . $endingEs) ?></p>
            </div>
        </div>
        <p class="en">I ask you this because I want you to see the powerful results that can be obtained with these
            pills.</p>
        <p class="es">Le pregunto esto porque quiero que vea los poderosos resultados que se pueden obtener con estas pastillas.</p>
        <p class="en">
            You need to understand that the secret of the effectiveness of the <?php echo ($productName) ?> is in its special mix of four
            ingredients that help enlarge the penis. Unlike other products that usually have a maximum of two ingredients,
            <?php echo ($productName) ?> combines the
            power of four substances that help thicken the cavernosa, and each one of them helps in the enlargement
            process in its own distinctive ways.
        </p>
        <p class="es">
            Debe comprender que el secreto de la efectividad del <?php echo ($productName) ?> está en su mezcla especial de cuatro
            ingredientes que ayudan a agrandar el pene. A diferencia de otros productos que generalmente tienen un
            máximo de dos ingredientes, <?php echo ($productName) ?> mezcló el poder de cuatro sustancias que ayudan a espesar la cavernosa
            y cada una de ellas ayuda en el proceso de agrandamiento en sus propias formas distintivas.
        </p>

        <section data-quiz-item id="next-quest" class="dontUsed">
            <div class="question-num">
                <span class="en">Question 4 of 6</span>
                <span class="es">Pregunta 4 de 6</span>
            </div>
            <div class="question">
                <span class="en">Do you want your sex to last longer than 20 minutes?</span>
                <span class="es">¿Quieres que su sexo dure más de 20 minutos?</span>
            </div>
            <!-- <div class="choices">
                <input name="3" id="3_0" type="radio">
                <label for="3_0">
                    <span class="en">Yes</span>
                    <span class="es">Sí</span>
                </label>
                <input name="3" id="3_1" type="radio">
                <label for="3_1">No</label>
            </div> -->
            <div class="choices" data-choices='["<span class=en>Yes</span><span class=es>Sí</span>","No"]'></div>
            <div class="stock stock-title"><b>
                    <span class="en">THANKS FOR YOUR ANSWERS</span>
                    <span class="es">GRACIAS POR LAS RESPUESTAS</span>
                </b></div>
            <div class="stock stock-text">
                <span class="en">Your answers will help in the research of Professor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
                <span class="es">Sus respuestas ayudarán en la investigación del profesor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
            </div>
            <div class="stock stock-text">
                <span class="en">At the moment the priority in the study was given to the age group of <b><span class="howold-div"></span></b></span>
                <span class="es">La prioridad en el estudio en este momento se dio al grupo de edad de <b><span class="howold-div"></span></b></span>
            </div>
            <div class="stock stock-text">
                <span class="en">You have reached the <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">target
                        audience</span></span>
                <span class="es">Ha llegado al <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">público objetivo</span></span>
            </div>
            <div class="stock stock-text">
                <span class="en">This age group gets a <b>50% discount</b> on <b><?php echo ($productName) ?></b></span>
                <span class="es">Este grupo de edad obtiene <b>un 50% de descuento</b> en <b><?php echo ($productName) ?></b></span>
            </div>
            <a href="<?= $offerLink ?>" class="stock stock-button">
                <span class="en">Get your discount</span>
                <span class="es">Obtenga su descuento</span>
            </a>
        </section>
        <div class="layers en">
            <div class="left_box">
                <br />
                <a href="<?= $offerLink ?>"><img data-src="img/prod.png" alt="" /></a>
                <p>
                    <?php echo ($productName) ?> won a prestigious award as the best treatment for penis enlargement in
                    <?php echo date('Y') ?>.
                </p>
            </div>
            <p>
                <strong>#1 Ingredient</strong> - Guarana - is the most important and required substance to quickly thicken the veins and enlarge the penis. This
                natural ingredient dilates the blood vessels to get more blood flowing to your penis. The
                cavernosa are
                stimulated and reinforced. If frequently consumed, you can increase your penis up to 73.4%.
            </p>
            <p>
                <strong>#2 Ingredient</strong> - Peppermint extract - It's used as an essential oil in <?php echo ($productName) ?> because its properties are unique.
                It contains great amounts of
                oxygen particles that help improve the transportation of nutrients to the cavernosa. Also, it helps to
                dilute the blood,
                so it will make your testosterone filled penis to grow even more. Thanks to these substances you will
                have a greater desire to have sex, and your sperm will have a better taste - all your partners will notice
                the difference.
            </p>
            <p>
                <strong>#3 Ingredient</strong> - Arctium extract - The plant known as the African viagra.
                The Arctium extract increases the sensibility of your penis to stimuli. So it's guaranteed to give you
                an instant and strong erection that will last for up to 30 - 40 min and will help you last longer in
                bed.
            </p>
            <p>
                <strong>#4 Ingredient</strong> - Ginseng extract - the root that increases libido<br />
                They have been used for centuries in traditional medicine in China and India. It has many properties including,
                an increase in vital energy, but above all else, it increases the libido and improves
                your erections,
                making them last longer. Also, it helps improve the blood flow to your penis, giving you better and
                faster erections, your penis won't go flaccid in the time of need. You'll make your partner have
                multiple orgasms and you
                won't have any problems.
            </p>
        </div>
        <div class="layers es">
            <div class="left_box">
                <br>
                <a href="<?= $offerLink ?>"><img data-src="img/prod.png" alt=""></a>
                <p><?php echo ($productName) ?> ganó un prestigioso premio como el mejor tratamiento para la ampliación del pene en
                    <?php echo date('Y') ?>.
                </p>
            </div>
            <p><strong>#1 Ingrediente </strong> - Guaraná <br>
                Es la sustancia más importante y necesaria para engrosar rápidamente las venas y agrandar el pene. Este
                ingrediente natural convierte las venas delgadas en carreteras anchas para que fluya más sangre a su
                pene. Los cuerpos cavernosos se estimulan y refuerzan. Si se consume con frecuencia, puede aumentar su pene
                hasta un 73,4%.</p>
            <p><strong>#2 Ingrediente</strong> - Extracto de menta <br>Se utiliza como aceite esencial en <?php echo ($productName) ?>
                porque sus propiedades son únicas. Contiene grandes cantidades de partículas de oxígeno que ayudan a
                mejorar el transporte de nutrientes a los cavernosos. Además, ayuda a diluir la sangre, por lo que hará
                que su pene lleno de testosterona crezca aún más. Gracias a estas sustancias tendrá un mayor deseo de
                tener relaciones sexuales, y su esperma tendrá un mejor sabor, todas tus parejas sentirán la diferencia.
            </p>
            <p><strong>#3 Ingrediente</strong> - Extracto de Arctium: la planta conocida como viagra africana<br>El
                extracto de Arctium aumenta la sensibilidad de su pene a los estímulos. Por lo tanto, está garantizado
                que le brindará una erección instantánea y fuerte que durará entre 30 y 40 minutos y lo ayudará a durar
                más en la cama.</p>
            <p><strong>#4 Ingrediente</strong> - Extracto de ginseng: la raíz que aumenta la libido<br>Se han utilizado
                durante siglos en la medicina tradicional en China e India. Tiene muchas propiedades, entre ellas,
                aumenta la energía vital, pero sobre todo, aumenta la libido y mejora tus erecciones, haciéndolas durar
                más. Además, ayuda a mejorar el flujo de sangre a su pene, brindando erecciones mejores y más rápidas,
                su pene no se volverá flácido en el momento de necesidad. Harás que tu pareja tenga múltiples orgasmos y
                no tendrás ningún problema.</p>
        </div>
        <section data-quiz-item id="next-quest" class="dontUsed">
            <div class="question-num">
                <span class="en">Question 5 of 6</span>
                <span class="es">Pregunta 5 de 6</span>
            </div>
            <div class="question">
                <span class="en">Do you want your wife to suck your dick every morning?</span>
                <span class="es">¿Quiere que su esposa le chupe el pene todas las mañanas?</span>
            </div>
            <!-- <div class="choices">
                <input name="4" id="4_0" type="radio">
                <label for="4_0">
                    <span class="en">Yes</span>
                    <span class="es">Sí</span>
                </label>
                <input name="4" id="4_1" type="radio">
                <label for="4_1">No</label>
            </div> -->
            <div class="choices" data-choices='["<span class=en>Yes</span><span class=es>Sí</span>","No"]'></div>
            <div class="stock stock-title"><b>
                    <span class="en">THANKS FOR YOUR ANSWERS</span>
                    <span class="es">GRACIAS POR LAS RESPUESTAS</span>
                </b></div>
            <div class="stock stock-text">
                <span class="en">Your answers will help in the research of Professor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
                <span class="es">Sus respuestas ayudarán en la investigación del profesor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
            </div>
            <div class="stock stock-text">
                <span class="en">At the moment the priority in the study was given to the age group of <b><span class="howold-div"></span></b></span>
                <span class="es">La prioridad en el estudio en este momento se dio al grupo de edad de <b><span class="howold-div"></span></b></span>
            </div>
            <div class="stock stock-text">
                <span class="en">You have reached the <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">target
                        audience</span></span>
                <span class="es">Ha llegado al <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">público objetivo</span></span>
            </div>
            <div class="stock stock-text">
                <span class="en">This age group gets a <b>50% discount</b> on <b><?php echo ($productName) ?></b></span>
                <span class="es">Este grupo de edad obtiene <b>un 50% de descuento</b> en <b><?php echo ($productName) ?></b></span>
            </div>
            <a href="<?= $offerLink ?>" class="stock stock-button">
                <span class="en">Get your discount</span>
                <span class="es">Obtenga su descuento</span>
            </a>
        </section>
        <div style="clear: both;"></div>
        <div class="en">
            <h3>Meet the only person who can free you from these embarrassing sexual issues.</h3>
            <p>
                The tests confirm that the first results appear just in a few instants, in less time than it took
                you to
                read this text. But I'm 100% sure that your penis won't grow if you don't start RIGHT NOW. This is the
                moment when you
                have to make the most important choice: do you decide this is too good to be true, or make a decision to
                take action and gain a pleasurable sexual life. Don't forget it comes with an extra <?php echo round($lengthIncrease * 1.0, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?> of
                length.
            </p>
            <p>It doesn't matter if you believe in it or not, if this is a scientific solution to your problems...</p>
            <p>It doesn't matter that you have tried other products before...</p>
            <p>It doesn't matter if you still believe it or not that your partner has been faking her orgasms...</p>
            <p><?php echo ($productName) ?> is the most secure, affordable and proven solution in the world to enlarge your penis.</p>
            <p>But in the end, it's you who must make the choice.</p>
            <center>
                <a href="<?= $offerLink ?>"><img style="width: 100%; max-width: 400px;" data-src="img/chashka.jpg" /></a>
            </center>
            <h3>Want to join thousands of men who can show off their <?php echo round($standardLength * 2.05, 1) ?> <?php echo ($measureUnitEn) ?> penis?</h3>
            <p>
                I've said it all about this method. You know how it works and how effective it can be, as stated by real
                consumers. But I know it's quite difficult to take the first step to enlarge your penis and improve your
                sex
                life. That's why
                I want to do something more for you. I'm offering my personal assistance. I want to remove any kind of
                risks
                when trying the effectiveness of <?php echo ($productName) ?>. Simply put, I'll take care of it all and I propose the
                following:
            </p>
        </div>
        <div class="es">
            <h3>Conoce a la única persona que puede liberarte de estos problemas sexuales embarazosos.</h3>
            <p>Las pruebas lo confirman, que los primeros efectos aparecen en pocos instantes, en menos tiempo del que
                tardó
                en leer este texto. Pero estoy 100% seguro de que su pene no crecerá si no comienza AHORA MISMO. Este es
                el
                momento en el que debe tomar la decisión más importante: ¿decide que esto es demasiado bueno para ser
                verdad, o toma la decisión de tomar medidas y obtener una vida sexual placentera? No olvide que viene
                con
                <?php echo round($lengthIncrease * 1.0, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?> adicionales de longitud.
            </p>
            <p>No importa si cree o no si esta es una solución científica para sus problemas ...</p>
            <p>No importa que hayas probado otros productos antes ...</p>
            <p>No importa si todavía crees o no que tu pareja ha fingido sus orgasmos ...</p>
            <p><?php echo ($productName) ?> es la solución más segura, asequible y probada que existe para agrandar su pene.</p>
            <p>Pero al final, es usted quien debe tomar la decisión.</p>
            <center><a href="<?= $offerLink ?>"><img style="width: 100%; max-width: 400px" data-src="img/chashka.jpg"></a>
            </center>
            <h3>¿Quiere unirse a miles de hombres que pueden lucir su pene de <?php echo round($standardLength * 2.05, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?>?</h3>
            <p>Lo he dicho todo sobre este método. Sabe cómo funciona y cuán efectivo puede ser, como dicen los
                consumidores reales. Pero sé que es bastante difícil dar el primer paso para agrandar su pene y mejorar
                su vida sexual. Por eso quiero hacer algo más por ti. Ofrezco mi asistencia personal. Quiero eliminar
                cualquier
                tipo de riesgo al probar la eficacia de <?php echo ($productName) ?>. En pocas palabras, me ocuparé de todo y propongo lo
                siguiente:
            </p>
        </div>
        <section data-quiz-item id="next-quest" class="dontUsed">
            <div class="question-num">
                <span class="en">Question 6 of 6</span>
                <span class="es">Pregunta 6 de 6</span>
            </div>
            <div class="question">
                <span class="en">Do you want to have sex every night with incredible pleasure?</span>
                <span class="es">¿Quiere tener sexo todas las noches con un placer increíble?</span>
            </div>
            <!-- <div class="choices">
                <input name="5" id="5_0" type="radio">
                <label for="5_0">
                    <span class="en">Yes</span>
                    <span class="es">Sí</span>
                </label>
                <input name="5" id="5_1" type="radio">
                <label for="5_1">No</label>
            </div> -->
            <div class="choices" data-choices='["<span class=en>Yes</span><span class=es>Sí</span>","No"]'></div>
            <div class="stock stock-title"><b>
                    <span class="en">THANKS FOR YOUR ANSWERS</span>
                    <span class="es">GRACIAS POR LAS RESPUESTAS</span>
                </b></div>
            <div class="stock stock-text">
                <span class="en">Your answers will help in the research of Professor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
                <span class="es">Sus respuestas ayudarán en la investigación del profesor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></span>
            </div>
            <div class="stock stock-text">
                <span class="en">At the moment the priority in the study was given to the age group of <b><span class="howold-div"></span></b></span>
                <span class="es">La prioridad en el estudio en este momento se dio al grupo de edad de <b><span class="howold-div"></span></b></span>
            </div>
            <div class="stock stock-text">
                <span class="en">You have reached the <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">target
                        audience</span></span>
                <span class="es">Ha llegado al <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">público objetivo</span></span>
            </div>
            <div class="stock stock-text">
                <span class="en">This age group gets a <b>50% discount</b> on <b><?php echo ($productName) ?></b></span>
                <span class="es">Este grupo de edad obtiene <b>un 50% de descuento</b> en <b><?php echo ($productName) ?></b></span>
            </div>
            <a href="<?= $offerLink ?>" class="stock stock-button">
                <span class="en">Get your discount</span>
                <span class="es">Obtenga su descuento</span>
            </a>
        </section>
        <div class="en">
            <h3>Try <?php echo ($productName) ?> at my own risk!</h3>
            <p>
                I'm a scientist, that's why I know how much men are affected by embarrassment and self-esteem issues in
                their
                daily lives. Unfortunately, I can't make your penis grow by itself, nor give multiple orgasms to your
                partner instead of you. What I can do is help you make the best choice. That's why I'm giving you this simple offer, no
                tricks.
            </p>
            <p><strong> In <?php echo round($daysVar * 1.0, 0) ?> days your dick will grow at least <?php echo round($lengthIncrease * 1.0, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?> and you'll be able to give up to 5 orgasms to
                    your girl.</strong></p>
            <div class="imginchdiv">
                <a href="<?= $offerLink ?>">
                    <img style="width: 100%; max-width: 400px;" data-src="img/ruka.jpg" />
                </a>
                <div class="imginch" style="top:4%;left:inherit;bottom:inherit;right:4%;">
                    <p><span>+<?php echo round($lengthIncrease * 0.88, 1) ?></span><br><?php echo ($measureUnitEn . $endingEn) ?></p>
                </div>
            </div>
            <p>Is the simplest offer that exists; you pay only for results, not for promises. To take this offer, just
                fill
                the order form.</p>
            <div class="secret_box">
                <h3 id="trans-quest">What you need to know:</h3>
                <p style="text-align: center; font-size: 18px;">
                    <strong>100% discretion guaranteed.</strong> The orders are packaged in a grey cardboard box, with no
                    logos or any kind of stamps or inscriptions that reveal the content of the package. The adhesive tape
                    used is brown, also, without any description.
                </p>
            </div>
            <p>
                In the case that <?php echo ($productName) ?> doesn't work for you, I suggest going to the doctor to check if there's something
                wrong with your penis. If you have no serious issues with the structure of the cavernosa, then there's
                nothing that could
                stop you from getting these incredible results. Absolutely nothing!
            </p>
            <p>Can there be a safer choice? Just remember, the quantity of the product is limited. This offer is unique
                and
                won't ever be repeated, that's why you need to TAKE ACTION!</p>
        </div>
        <div class="es">
            <h3>¡Pruebe <?php echo ($productName) ?> bajo mi propia responsabilidad!</h3>
            <p>Soy un científico, por eso sé cuánto a los hombres les afectan la vergüenza y los problemas de autoestima
                en
                su vida diaria. Desafortunadamente, no puedo hacer que su pene crezca solo, ni darle orgasmos múltiples
                a su
                pareja en su nombre. Lo que puedo hacer es ayudarlo a tomar la mejor decisión. Por eso le doy esta
                simple
                oferta, sin trucos.
            </p>
            <div class="imginchdiv">
                <a href="<?= $offerLink ?>">
                    <img style="width: 100%; max-width: 400px;" data-src="img/ruka.jpg" />
                </a>
                <div class="imginch" style="top:4%;left:inherit;bottom:inherit;right:4%;">
                    <p style="font-size: 24px;"><span>+<?php echo round($lengthIncrease * 0.88, 1) ?></span><br><?php echo ($measureUnitEs . $endingEs) ?></p>
                </div>
            </div>
            <p>Es la oferta más sencilla que existe; paga solo por los resultados, no por las promesas. Para aceptar
                esta
                oferta, simplemente complete el formulario de pedido.
            </p>
            <div class="secret_box">
                <h3>Lo que necesita saber:</h3>
                <p style="text-align: center;font-size:18px;"><strong>100% discreción garantizada.</strong> Los pedidos
                    se
                    empaquetan en una caja de cartón gris, sin logotipos ni ningún tipo de precinto o inscripciones que
                    revelen el contenido del paquete. La cinta adhesiva utilizada es de color marrón, también, sin
                    descripción alguna.</p>
            </div>
            <p>En el caso de que <?php echo ($productName) ?> no funcione para usted, le recomiendo que vaya al médico para verificar si hay
                algún problema con su pene. Si no tiene problemas serios con la estructura cavernosa, entonces no hay
                nada que pueda evitar que obtenga estos increíbles resultados. ¡Absolutamente nada!</p>
            <p>¿Puede haber una opción más segura? Solo recuerde, la cantidad de producto es limitada. Esta oferta es
                única
                y no se repetirá nunca, ¡es por eso que debe TOMAR ACCIÓN!</p>
        </div>
        <div id="bottle">
            <a href="<?= $offerLink ?>"><img data-src="img/prod.png" style="margin: 50px auto 0px;" alt="" /></a>
        </div>
        <div class="container" id="content">
            <a href="<?= $offerLink ?>" target="_blank" id="ssbutton" style="max-width: 510px; margin: 0 auto;">
                <span class="en">
                    Click here to Order <?php echo ($productName) ?>
                </span>
                <span class="es">
                    Haga clic aquí para pedir <?php echo ($productName) ?>
                </span>
            </a>
        </div>
        <div id="quest-box"></div>

        <div id="footer" class="index-h22">
            <div id="copyright">
                <?php
                //список месяцев с названиями для заменын на испанском                
                $_monthsList = array(
                    "01" => "enero", "02" => "febrero",
                    "03" => "marzo", "04" => "abril", "05" => "mayo", "06" => "junio",
                    "07" => "julio", "08" => "agosto", "09" => "septiembre",
                    "10" => "octubre", "11" => "noviembre", "12" => "diciembre"
                );
                // нужная дата
                $requiredDate = date("m j", mktime(0, 0, 0, date('m'), date('d') + 7, date('Y')));
                $part = explode(" ", $requiredDate);

                if ($city == 'Unknown' || empty($city)) {
                    $city = '';
                } else if (!empty($city)) {
                    $content = '<p style="font-size:1.2em;">
                                        <span class="en">Special offer for ' . $city . ' residents until ' . date("F j", mktime(0, 0, 0, date('m'), date('d') + 7, date('Y'))) . '</span>
                                        <span class="es">Oferta especial para residentes de ' . $city . ' hasta el ' . $part[1] . ' de ' . $_monthsList[$part[0]] . '</span>
                                    </p>';
                    echo $content;
                }
                ?>
                <p class="en">Copyright ©
                    <?php echo date('Y') ?>. All Rights Reserved.
                </p>
                <p class="es">Copyright ©
                    <?php echo date('Y') ?>. Todos los derechos reservados.
                </p>
                <p class="en">
                    <a href="<?= $offerLink ?>">Privacy Policy</a> | <a href="<?= $offerLink ?>">Rules</a> |
                    <a href="<?= $offerLink ?>">Contact</a> | <a href="<?= $offerLink ?>">Join Us</a>
                </p>
                <p class="es">
                    <a href="<?= $offerLink ?>">Política de privacidad</a> | <a href="<?= $offerLink ?>">Reglas</a> |
                    <a href="<?= $offerLink ?>">Contacto</a> | <a href="<?= $offerLink ?>">Únete a nosotros</a>
                </p>
            </div>
        </div>

        <div class="legal_testim en">
            Due to security reasons and to provide the best customer service, the owner of this web site reserves the
            right to do any changes to the privacy policies. This is done to keep safe the client's identity, so to
            protect them, we
            changed the names and last names of the people mentioned here. Also, the site's owner declares that any
            resemblance to real people is by pure coincidence and wasn't done on purpose.
        </div>
        <div class="legal_testim es">
            Por razones de seguridad y para brindar el mejor servicio al cliente, el propietario de este sitio web se
            reserva el derecho de realizar cambios en las políticas de privacidad. Esto se hace para mantener segura la
            identidad del cliente, por lo que para protegerlo, cambiamos los nombres y apellidos de las personas
            mencionadas aquí. Además, el propietario del sitio declara que cualquier parecido con personas reales es por
            pura coincidencia y no se hizo a propósito.
        </div>
    </div>

    <style>
        #block1,#block2{float:left;display:block;margin:2px}.comeback_layout{display:none;position:fixed;color:#000;left:0;top:0;width:100%;height:100%;z-index:20000000;background:rgba(0,0,0,.75);overflow-y:scroll;-ms-overflow-style:none;overflow:-moz-scrollbars-none}.comeback_layout::-webkit-scrollbar{width:0}.comeback_wrapper{width:100%;max-width:550px;margin:0 auto}.comeback_container{background:url(img/comebackground.jpg) 0 0/100% 100% #fff;padding:25px;margin-top:2%;text-align:center;border-radius:25px}.comeback_container h1{font-size:40px}.comeback_container .form-group{width:90%;max-width:400px;margin:0 auto;text-align:left}.comeback_container .btn{display:block;width:300px;color:#fff;background:#f82a5e;text-transform:uppercase;padding:10px 0;font-size:19px;font-weight:400;line-height:1.42857143;text-align:center;vertical-align:middle;border:1px solid transparent;border-radius:4px;margin:0 auto;text-decoration:none}.comeback_img{width:100%;margin:10px auto;max-width:200px}.form-horizontal span{display:block;margin:20px 0}.comeback_close{float:right;cursor:pointer}#comeback p{font-size:16px}@media (max-width:700px){.comeback_container h1{line-height:18px;font-size:16px}.comeback_img{margin:5px auto}.comeback_container p{line-height:14px;font-size:15px}.comeback_container{padding:15px}}#block1{width:130px}#block2{width:165px}
    </style>
    <div id="comeback" class="comeback_layout">
        <div class="comeback_wrapper">
            <div class="comeback_container center-block">
                <span class="comeback_close" onclick="document.getElementById('comeback').style.display = 'none';"><img src="img/cross.png" width="21" height="21" class="cross"></span>
                <h1 class="en" style="margin: 0 auto; width: 300px;text-align:center;color: crimson;">Wait!</h1>
                <h1 class="es" style="margin: 0 auto; width: 300px;text-align:center;color: crimson;">Espere!</h1>
                <p class="en" style="line-height: 6px;">Are you sure you want to leave?</p>
                <p class="es" style="line-height: 6px;">Está seguro que quiere irse?</p>
                <p class="en" style="text-transform: uppercase;"><b>Don't miss out on this exclusive offer</b></p>
                <p class="es" style="text-transform: uppercase;"><b>NO SE PIERDA ESTA OFERTA EXCLUSIVA</b></p>
                <br>
                <div style="position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;margin-right:auto;margin-left:auto;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-box-align: center;-ms-flex-align: center;align-items: center;">
                    <div id="block1"><a href="<?= $offerLink ?>"><img class="comeback_img" src="img/prod.png"></a></div>
                    <div id="block2">
                        <p class="en" style="text-transform: uppercase; font-size: 31px; line-height: 33px;margin: 41px 5px;">
                            <b>Get a huge <span style="color: crimson;">discount</span> + FREE SHIPPING</b>
                        <p class="es" style="text-transform: uppercase; font-size: 27px; line-height: 33px;margin: 41px 5px;">
                            <b>OBTENGA UN GRAN <span style="color: crimson;">DESCUENTO</span> + ENVÍO GRATIS</b>
                        </p>
                    </div>
                </div>

                <br>
                <br>
                <a class="btn" href="<?= $offerLink ?>">
                    <span class="en">
                        Get your 50% discount
                    </span>
                    <span style="font-size:0.9em" class="es">
                        Obtenga su 50% de descuento
                    </span>
                </a>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-wrap">
            <div id="emc-progress"></div>
            <button id="next-min" data-scroll="#next-quest" class="next-min">
                <div class="fa fa-arrow-right"></div>
            </button>
            <a href="<?= $offerLink ?>" id="progress-button">
                <span class="en">
                    Get your discount
                </span>
                <span class="es" style="font-size:0.85em">
                    Obtenga su descuento
                </span>
            </a>
        </div>
    </footer>

    <script>
        var comebackerID = 'comeback';
        var comebacker = document.getElementById(comebackerID);
        var isShow = 0;

        window.isShow = 0;
        var stateObj = { foo: "bar" };
        var curURL = window.location.href;
        var curTitle = document.title;
        history.pushState(stateObj, curTitle, curURL);

        window.onpopstate = function (event) {
            history.pushState(stateObj, curTitle, curURL);
            if (isShow === 0) {
                document.getElementById('comeback').style.display = 'block';
                isShow = 1;
            }
        };
        document.body.onmouseout = function (event) {
            if (event.clientY < 0 && isShow == 0) {
                document.getElementById('comeback').style.display = 'block';
                isShow = 1;
            }

        };
        document.getElementById('comeback').onclick = function (event) {
            if (event.target.id == "comeback") {
                document.getElementById('comeback').style.display = 'none';
            }
        };
    </script>

    <script src="js/jquery.js"></script>
    <script src="js/lang-switch.js"></script>

    <script>
        let offerDomain = "<?= $domain ?>"
    </script>

    <script src="js/script.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            // отложенная загрузка изображений
            [].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
                img.setAttribute('src', img.getAttribute('data-src'));
                img.onload = function() {
                    img.removeAttribute('data-src');
                };
            });
            // отложенная загрузка изображений
        });
    </script>

    <script>
        // Split_LP
        tracker_url = 'https://secret-health-001.com/';

        function lp_update_token(token, value, clickid, uclick) {
        const elem = document.createElement("img");
        elem.src = tracker_url + 'click.php?lp=data_upd&' + token + '=' + value + '&clickid=' + clickid + '&uclick=' + uclick;
        };

        setTimeout(function () {
        lp_update_token('inches', '<?= $inchCmSplit ?>', '<?= $clickid ?>', '<?= $uclick ?>');
        }, 1000);
        // Split_LP
    </script>

</body>

</html>
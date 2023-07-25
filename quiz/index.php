<?php
function getParam($name, $default = "") {
    return isset($_GET[$name]) ? $_GET[$name] : $default;
}

$domain = getParam("domain", "adltads.com");
$clickPhpUrl = "//$domain/click.php";
$uclick = getParam('uclick', false);
$clickid = getParam('clickid', '');
$offerLink = "$clickPhpUrl?lp=1";
if ($uclick) $offerLink .= "&uclick=$uclick";

function getDay($modifier = null) {
    if (!is_null($modifier)) {
        return date('d.m.Y', strtotime($modifier . ' days'));
    }
    return date('d.m.Y');
}

$city = getParam('city','');

// Название товара
$productName = 'Testo360';

// Цена триала
$trialPrice = '$6.35';

// Сплит инчи и см
$inchCmSplits = array("4.3"=>array("inch","es","″","4.3","3.9"),"4.6"=>array("inch","es","″","4.6","3.9"),"4.9"=>array("inch","es","″","4.9","3.9"),"5.2"=>array("inch","es","″","5.2","3.9"));
$inchCmSplit = getParam('inchcmsplit', '4.3');

// Единицы измерения и удлиннение
$measureUnitEn = $inchCmSplits[$inchCmSplit][0];
$endingEn = $inchCmSplits[$inchCmSplit][1];
$measureUnitEs = 'pulgada';
$endingEs = 's';
$alternativeVar = $inchCmSplits[$inchCmSplit][2];
$lengthIncrease = $inchCmSplits[$inchCmSplit][3];

// Стандартная длина
$standardLength = $inchCmSplits[$inchCmSplit][4];

// Стандартная длина
$bottlesLeft = '27';

// Персонажи проклы
$firstVarNameEn = 'Thomas';
$firstVarSurnameEn = 'Weaver';
$secondVarNameEn = 'Martin';

// Производитель
$manufacturerVarEn = 'USA';
$manufacturerVarEs = 'EE. UU.';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Answer 6 questions to get a bonus!</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <style>
    .es .en,.en .es{display:none}*{margin:0;padding:0;border:0;outline:0}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}::-moz-selection{background:#de2600;color:#fff}::selection{background:#de2600;color:#fff}ol,ul{list-style:none}img{max-width:100%}a{text-decoration:none}body{font-size:18px;width:100%;font-family:Roboto,sans-serif;background-color:#161616}.header{position:relative;vertical-align:middle;width:100%;background-color:#fff;padding-top:5px}.header:before{content:'';background:#fff;position:absolute;width:2500px;height:100%;right:100%;top:0}.header:after{content:'';background:#fff;position:absolute;width:2500px;height:100%;left:100%;top:0}.clearfix{clear:both}.wrapper{position:relative;overflow:hidden}.bx-viewport{overflow:hidden}.header__container{max-width:1024px;min-width:320px;margin:0 auto;width:70%}.logo{display:inline-block;margin-top:18px}.pictures{display:inline-block;float:right}.top{display:inline-block}.main{max-width:600px;margin:0 auto;width:100%;min-width:320px}.main__top-block{position:relative;background-repeat:no-repeat;background-size:cover;background-position:center;max-width:1024px;margin:0 auto}.main__attention{display:block;width:fit-content;position:relative;margin:0 auto;background-color:#fcd803;padding:10px 15px;font-size:30px;color:#e83121}.main__down-text{width:fit-content;margin:45px auto 30px;text-transform:uppercase;text-align:center}.main__down-text-two{text-align:center;font-size:23px;margin:0 0 30px;color:#fff}.top-block__question{color:#fff;font-weight:700;font-size:38px}.top-block__bigger{color:#e71b22;font-size:26px;font-weight:700;text-shadow:1px 1px 1px #fff}.content{font-size:0;text-align:center}.left{display:table-cell;box-sizing:border-box;padding-right:15px;float:left;width:26%}.bx-pager{display:none}.bx-wrapper{padding:0;position:relative;text-align:left;color:#000}.slider__img{width:fit-content;margin:0 auto}.slider__title{display:flex;justify-content:space-between;margin:45px 0 30px;position:relative}.slider__title-num{height:10px;width:15%;background:#404040;border-radius:5px}.slider__title-question{margin:0 0 15px}.slider__title-active{background:#aaa}.slider__question{color:#fff;font-size:24px;margin:0 0 30px}.slider__button{margin:0 auto;font-size:22px;font-weight:500;z-index:2;position:relative;text-align:center;clear:both}.question{padding:20px;font-size:22px;background:#888;margin:0 0 30px;color:#000;border-radius:10px}.question-with-img{display:flex;justify-content:space-between}.question-with-img .question-div-with-img{min-width:70px;width:85px;margin-right:25px}.end-promo{padding:30px 20px 35px;font-size:37px;background:#fff;margin:30px 0;color:#000;border-radius:5px;border:6px solid #f9dc3d;text-align:center}.prev-btn{display:block;position:relative;bottom:0;color:#000}.prev-btn:before{content:'';position:absolute;width:27px;border:2px solid #d0cccc;border-radius:60px;height:100%;right:100%;top:0;margin-right:10px}.prev-btn:hover:before{background-image:url(img/hover-1.png);background-size:auto;background-position:center;background-repeat:no-repeat;border:2px solid #e71b22}.slider__last-text{position:relative;display:block;text-align:center;color:#000;font-size:24px;text-transform:uppercase}.slide{direction:ltr;border-radius:30px;margin:0!important;padding-bottom:25px}.right{display:table-cell;padding-left:15px;float:right;width:26%}.bx-wrapper{width:100%;position:relative;display:inline-block;direction:ltr;overflow:hidden}.bx-controls.hide{display:none}.pointer{position:relative;margin:0 auto;width:120px;padding:8px 0}.button{display:block;margin:0 auto 25px;text-decoration:underline;font-size:30px;width:fit-content;color:#fff}.button:hover{text-decoration:none}.footer{position:relative;bottom:15px;text-align:center;font-size:14px;padding:20px;color:#fff}.banner-text{padding:15px 10px;background-color:#fff}.banner-text--1{padding:23px 10px}.banner-text--1 .text{font-size:18px;line-height:1.5;text-transform:uppercase;font-weight:700;text-align:center;color:#e71b22}.button{width:100%;cursor:pointer;text-decoration:none;text-align:center;padding:18px 0;-webkit-border-radius:8px;-moz-border-radius:8px;border-radius:8px;text-transform:uppercase;font:28px Arial,Helvetica,sans-serif;font-weight:700;color:#fff;background-color:#4eb52b;-webkit-transition:.3s;-o-transition:.3s;transition:.3s}.button-skip{background-color:#aaa}.button:disabled{width:100%;text-decoration:none;text-align:center;padding:11px 32px;border:solid 1px #0072087a;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;font:18px Arial,Helvetica,sans-serif;font-weight:700;color:#e5ffe7;cursor:default;background-color:#87b78b7a;background-image:-webkit-linear-gradient(top,#3bc7477a 0,#31483263 100%);box-shadow:0 0 2px #bababa,inset 0 0 1px #fff}.banner-text--1.is-active{background-color:#fcd803}.banner-text--1.is-active .text{color:#000}.banner-text--2 .text{font-size:22px;line-height:1.2;text-transform:uppercase;font-weight:700;text-align:center;color:#000}.banner-text--2 .text .accent{display:block;margin:10px 0 0;font-size:18px;color:#e71b22;padding:5px;border-radius:20px}.banner-text--2.is-active .text .accent{background-color:#e71b22;color:#fff}.img-quizz{margin:0 0 30px;display:none}.img-quizz img{display:block;border-radius:10px;width:60%;margin:0 auto}.img-quizz video{display:block;border-radius:10px;width:60%;margin:0 auto}.img-quizz .img-width{width:80%}@media (max-width:1400px){.header__container{width:86%}.pictures .top{max-width:80px}}@media (max-width:1200px){.header__container{width:95%}}@media (max-width:991px){.header__container{width:70%;padding:20px}.pictures{display:none}.logo{margin:0 auto;display:block;width:306px}.main{width:100%;padding:1px 15px}}@media (max-width:768px){.left{display:none}.right{display:none}.main__down-text{text-align:center}.background-slider{width:68%}.main__attention{display:none}.bx-wrapper{width:100%}}@media (max-width:680px){.top-block-span{font-size:.85em}.top-block__question{font-size:35px}}@media (max-width:600px){.slider__question{font-size:22px}.end-promo{font-size:35px}}@media (max-width:500px){.bx-wrapper{width:100%}.top-block__question{font-size:32px}.img-quizz img{width:80%}.img-quizz video{width:80%}.img-quizz .img-width{width:100%}}@media (max-width:435px){.background-slider{width:100%}.top-block__question{font-size:30px}.slider__question{font-size:21px}.main__attention{font-size:36px}.main__down-text{width:100%}.main__down-text-two{font-size:19px}.button{font-size:24px}.end-promo{font-size:33px}.top-block-span{font-size:.75em}}@media (max-width:400px){.header__container{padding:15px}.logo{width:100%}.background-slider{padding:0}.bx-controls-direction{top:181px;margin-left:53px}}@media (max-width:380px){.top-block__question{font-size:27px}.main__down-text-two{font-size:18px}.question-with-img{flex-direction:column;align-items:center}.question-with-img .question-div-with-img{width:75px;margin-bottom:10px;margin-right:0}.question-with-img .question-div{width:100%;text-align:center}}@media (max-width:360px){.top-block__question{font-size:25px}.main__down-text-two{font-size:17px}}@media (min-width:300px){.container{width:320px;padding:0}}@media (min-width:500px){.container{width:475px}}@media (min-width:768px){.container{width:748px}}@media (min-width:992px){.container{width:970px}}.bouton{text-transform:uppercase}.bouton:hover{-webkit-transform:scale(1.1);-moz-transform:scale(1.1);-o-transform:scale(1.1)}.bouton{text-align:center;display:block}.bouton{text-decoration:none;color:#fff;background:#ff2727;border-radius:7px;font-size:18px;padding:20px 0;width:260px;margin:0 auto 35px;cursor:pointer;-moz-transition:all 1s ease-out;-o-transition:all 1s ease-out;-webkit-transition:all 1s ease-out}input[type=tel]{max-width:100%;border-radius:4px;border:1px solid #d8dde6;color:#707b87;padding:0 14px;height:48px;transition:color ease .2s,border-color ease .2s;box-shadow:1px 1px 3px 0 rgba(0,0,0,.2);margin-top:20px}input{display:block;text-align:left;width:100%;position:relative;z-index:1}.form_radio{width:100%;display:flex;flex-direction:column}.form_radio input[type=radio]{display:none}.form_radio label{display:block;cursor:pointer;padding:15px 10px;margin:0 0 15px;color:#fff;font-size:21px;user-select:none;background:#404040;border-radius:5px;text-align:center;-webkit-transition:.3s;-o-transition:.3s;transition:.3s}.form_radio input[type=radio]:checked+label{background:#f9dc3d;color:#000}.form_radio label:hover{filter:brightness(120%)}.form_radio input[type=radio]:disabled+label{filter:grayscale(100%)}#headertheme{height:40px;border-radius:30px 30px 0 0;margin:0 auto;width:100%;background:url(img/bg.jpg);padding-bottom:20px}.lefto{width:100%;border-radius:100%}@media (max-width:600px){.p-lefto-img{clear:both;text-align:center!important}}.button-first{margin-bottom:15px}.end-slide-howold{display:none}
    </style>
</head>

<body class="en">
    <div class="wrapper" id="top">
        <div class="main">
            <div class="content" style="text-align: center;">
                <div class="content__slider">
                    <div class="slide">
                        <div class="main__top-block">
                            <div class="main__down-text en">
                                <span class="top-block__question">
                                    <span>Answer 6 questions</span><br>
                                    <span style="color:#de2600">TO GET A DISCOUNT!</span>
                                </span>
                            </div>
                            <div class="main__down-text es">
                                <span class="top-block__question">
                                    <span>Responde 6 preguntas</span><br>
                                    <span style="color:#de2600">y OBTÉN UNA BOTELLA CON DESCUENTO!</span>
                                </span>
                            </div>
                            <div class="img-quizz">
                            </div>
                            <div class="slider__button">
                                <span class="next-btn" data-scroll="#top"> <button class="button"><span class="en">GO</span><span class="es">GO</span></button> </span>
                            </div>
                            <div class="question question-with-img">
                                <div class="question-div-with-img">
                                    <img alt="" class="lefto lefto-img" src="img/doktoro.jpg">
                                </div>
                                <div style="line-height:1em" class="question-div">
                                    <?php 
                                        //список месяцев с названиями для заменын на испанском                
                                        $_monthsList = array("01" => "enero", "02" => "febrero", 
                                        "03" => "marzo", "04" => "abril", "05" => "mayo", "06" => "junio", 
                                        "07" => "julio", "08" => "agosto", "09" => "septiembre",
                                        "10" => "octubre", "11" => "noviembre", "12" => "diciembre");
                                        // нужная дата
                                        $requiredDate = date("m j", mktime(0, 0, 0, date('m') , date('d')+7, date('Y')));
                                        $part = explode(" ", $requiredDate);
                                            
                                        if ($city == 'Unknown' || empty($city)) {
                                            $city = '';
                                            $content = '<span style="display: block; margin: 0 0 10px;font-weight:bold;font-size: 0.85em;">
                                                            <span class="en">Questions prepared by Professor '.$firstVarNameEn.' '.$firstVarSurnameEn.'</span>
                                                            <span class="es">Preguntas hechas por el profesor '.$firstVarNameEn.' '.$firstVarSurnameEn.'</span>
                                                        </span>';
                                            echo $content;
                                        }
                                        else if (!empty($city)) {
	                                        $content = '<span style="display: block; margin: 0 0 10px;font-weight:bold;font-size: 0.85em;">
                                                            <span class="en">A test is available for '.$city.' residents until '.date("F j", mktime(0, 0, 0, date('m') , date('d')+7, date('Y'))).'</span>
                                                            <span class="es">Una prueba está disponible para los residentes de '.$city.' hasta el '.$part[1].' de '.$_monthsList[$part[0]].'</span>
                                                        </span>
                                                        <span style="display: block; margin: 0 0 5px;font-size: 0.75em;font-style:italic;">
                                                            <span class="en">Questions prepared by Professor '.$firstVarNameEn.' '.$firstVarSurnameEn.'</span>
                                                            <span class="es">Preguntas hechas por el profesor '.$firstVarNameEn.' '.$firstVarSurnameEn.'</span>
                                                        </span>';
                                            echo $content;
                                        }
                                    ?>
                                    <span class="en" style="font-size: 0.75em;font-style:italic;">By answering all questions, you will help with the ongoing research and receive a <b>discount</b> bottle</span>
                                    <span class="es" style="font-size: 0.75em;font-style:italic;">Al responder todas las preguntas, ayudarás con la investigación en curso y recibirás una botella de <b>descuento</b></span>
                                </div>
                            </div>
                            <div class="main__down-text-two">
                                <p class="en" style="font-size: 0.8em;">
                                    There are only <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;"><?php echo ($bottlesLeft) ?> bottles left</span>, do not delay!<br>
                                    <i style="font-size: 0.9em;">(Last update : 8 min ago)</i>
                                </p>
                                <p class="es" style="font-size: 0.8em;">
                                    Solo <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;">quedan <?php echo ($bottlesLeft) ?> botellas,</span> ¡no te demores!<br>
                                    <i style="font-size: 0.9em;">(Última actualización: hace 8 minutos)</i>
                                </p>
                            </div> 
                        </div>
                    </div>
                    <div class="slide" style="display:none;">
                        <div class="slider__title">
                            <div class="slider__title-num slider__title-active"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div>
                        </div>
                        <div class="slider__question en" style="text-align:center;line-height:1.3;">
                        By how many <?php echo ($measureUnitEn . $endingEn) ?> do you want to enlarge your penis?
                        </div>
                        <div class="slider__question es" style="text-align:center;line-height:1.3;">
                        ¿Por cuántos <?php echo ($measureUnitEs . $endingEs) ?> quieres agrandar tu pene?
                        </div>
                        <div class="slider__title-question">
                            <div class="form_radio" id="question1">
                                <input class="question1" id="radio-1" type="radio" name="radio" value="<?php echo round($lengthIncrease * 1.2, 0) ?><?php echo ($measureUnitEn . $endingEn) ?>" onclick="Go(this.checked)">
                                <label for="radio-1"><span class="en"><?php echo round($lengthIncrease * 1.2, 0) ?> <?php echo ($measureUnitEn . $endingEn) ?></span><span class="es"><?php echo round($lengthIncrease * 1.2, 0) ?>  <?php echo ($measureUnitEs . $endingEs) ?></span></label><br>
                                <input class="question1" id="radio-2" type="radio" name="radio" value="<?php echo round($lengthIncrease * 0.7, 0) ?><?php echo ($measureUnitEn . $endingEn) ?>" onclick="Go(this.checked)">
                                <label for="radio-2"><span class="en"><?php echo round($lengthIncrease * 0.7, 0) ?> <?php echo ($measureUnitEn . $endingEn) ?></span><span class="es"><?php echo round($lengthIncrease * 0.7, 0) ?> <?php echo ($measureUnitEs . $endingEs) ?></span></label><br>
                                <input class="question1" id="radio-3" type="radio" name="radio" value="<?php echo round($lengthIncrease * 0.23, 0) ?><?php echo ($measureUnitEn) ?>" onclick="Go(this.checked)">
                                <label for="radio-3"><span class="en"><?php echo round($lengthIncrease * 0.23, 0) ?> <?php echo ($measureUnitEn) ?></span><span class="es"><?php echo round($lengthIncrease * 0.23, 0) ?> <?php echo ($measureUnitEs) ?></span></label>
                            </div>
                        </div>
                        <div class="slider__button">
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-first" id="button"><span class="en">Next</span><span class="es">Siguiente</span> >></button>
                            </span>
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-skip" id="button"><span class="en">Skip</span><span class="es">Saltar</span> >></button>
                            </span>
                            <script>
                                function Go(Type) {
                                    document.getElementById('button').disabled = !Type;
                                }
                            </script>
                        </div>
                        <div class="img-quizz">
                        </div>
                        <div class="question en">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">Did you know?</span>
                            <span style="font-size: 0.75em;font-style: italic;">The average size of the human penis is <?php echo round($standardLength * 1.66, 1) ?> <?php echo ($measureUnitEn . $endingEn) ?></span>
                        </div>
                        <div class="question es">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">¿Sabías?</span>
                            <span style="font-size: 0.75em;font-style: italic;">El tamaño promedio del pene humano es de <?php echo round($standardLength * 1.66, 1) ?> <?php echo ($measureUnitEs . $endingEs) ?></span>
                        </div>
                    </div>
                    <div class="slide" style="display:none;">
                        <div class="slider__title">
                            <div class="slider__title-num"></div><div class="slider__title-num slider__title-active"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div>
                        </div>
                        <div class="slider__question en">
                            How old are you?
                        </div>
                        <div class="slider__question es">
                        ¿Cuantos años tienes?
                        </div>
                        <div class="slider__title-question">
                            <div class="form_radio" id="question1">
                                <input class="question3" id="radio-4" type="radio" name="radio" value="18-30" onclick="Howold(this.value)">
                                <label for="radio-4"><span class="en">Between 18 and 30 years old</span><span class="es">Entre 18 y 30 años</span></label><br>
                                <input class="question3" id="radio-5" type="radio" name="radio" value="31-45" onclick="Howold(this.value)">
                                <label for="radio-5"><span class="en">Between 31 and 45 years old</span><span class="es">Entre 31 y 45 años</span></label><br>
                                <input class="question3" id="radio-6" type="radio" name="radio" value="46-60" onclick="Howold(this.value)">
                                <label for="radio-6"><span class="en">Between 46 and 60 years old</span><span class="es">Entre 46 y 60 años</span></label><br>
                                <input class="question3" id="radio-7" type="radio" name="radio" value="60+" onclick="Howold(this.value)">
                                <label for="radio-7"><span class="en">More than 60 years old</span><span class="es">Más de 60 años</span></label>
                            </div>
                        </div>
                        <div class="slider__button">
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-first" id="button"><span class="en">Next</span><span class="es">Siguiente</span> >></button>
                            </span>
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-skip" id="button"><span class="en">Skip</span><span class="es">Saltar</span> >></button>
                            </span>
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
                                    var path = window.location.pathname;
	                                path = path.substr(0, path.indexOf("/quiz"));
                                    var expires = new Date();
                                    expires.setDate(expires.getDate() + 7);
                                    expires.toUTCString();
                                    document.cookie = [
                                        'howoldCookie=' + howoldCookie
                                        , '; expires=' + expires // используем expires, max-age не поддерживается в ИЕ
                                        , '; path=' + path
                                        , '; domain=' + document.location.host
                                    ].join('');
                                    // end cookie
                                    document.querySelector('.end-slide-normal').style.display = 'none';
                                    document.querySelector('.end-slide-howold').style.display = 'block';
                                }
                            </script>
                            <script>
                                
                            </script>
                        </div>
                        <div class="img-quizz">
                        </div>
                        <div class="question en">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">Did you know?</span>
                            <span style="font-size: 0.75em;font-style: italic;"><?php echo ($productName) ?> works equally effectively at any age.</span>
                        </div>
                        <div class="question es">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">¿Sabías?</span>
                            <span style="font-size: 0.75em;font-style: italic;"><?php echo ($productName) ?> funciona de manera igualmente efectiva a cualquier edad.</span>
                        </div>
                    </div>
                    <div class="slide" style="display:none;">
                        <div class="slider__title">
                            <div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num slider__title-active"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div>
                        </div>
                        <div class="slider__question en" style="text-align:center;line-height:1.3;">
                            Do you want your wife to experience an orgasm every time?
                        </div>
                        <div class="slider__question es" style="text-align:center;line-height:1.3;">
                        ¿Quieres que tu esposa tenga un orgasmo cada vez?
                        </div>
                        <div class="slider__button">
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-first" id="button"><span class="en">Yes</span><span class="es">Sí</span></button>
                            </span>
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-skip" id="button">No</button>
                            </span>
                            <script>
                                function Go(Type) {
                                    document.getElementById('button').disabled = !Type;
                                }
                            </script>
                        </div>
                        <div class="img-quizz">
                        </div>
                        <div class="question en">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">Did you know?</span>
                            <span style="font-size: 0.75em;font-style: italic;"><?php echo ($productName) ?> will give you Bigger & Long-Lasting Erections that will maximize pleasure and intensify orgasms for your partner.</span>
                        </div>
                        <div class="question es">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">¿Sabías?</span>
                            <span style="font-size: 0.75em;font-style: italic;"><?php echo ($productName) ?> le dará una erección más fuerte y prolongada que maximiza el placer y mejora el orgasmo de tu pareja.</span>
                        </div>
                    </div>
                    <div class="slide" style="display:none;">
                        <div class="slider__title">
                            <div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num slider__title-active"></div><div class="slider__title-num"></div><div class="slider__title-num"></div>
                        </div>
                        <div class="slider__question en" style="text-align:center;line-height:1.3;">
                            Do you want your sex to last longer than 20 minutes?
                        </div>
                        <div class="slider__question es" style="text-align:center;line-height:1.3;">
                            ¿Quieres que tu sexo dure más de 20 minutos?
                        </div>
                        <div class="slider__button">
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-first" id="button"><span class="en">Yes</span><span class="es">Sí</span></button>
                            </span>
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-skip" id="button">No</button>
                            </span>
                            <script>
                                function Go(Type) {
                                    document.getElementById('button').disabled = !Type;
                                }
                            </script>
                        </div>
                        <div class="img-quizz">
                        </div>
                        <div class="question en">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">Did you know?</span>
                            <span style="font-size: 0.75em;font-style: italic;"><?php echo ($productName) ?> is manufactured in the <?php echo ($manufacturerVarEn) ?>: laboratories are recognized throughout the world.</span>
                        </div>
                        <div class="question es">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">¿Lo sabías?</span>
                            <span style="font-size: 0.75em;font-style: italic;"><?php echo ($productName) ?> se fabrica en los <?php echo ($manufacturerVarEs) ?>: los laboratorios son reconocidos en todo el mundo</span>
                        </div>
                    </div>
                    <div class="slide" style="display:none;">
                        <div class="slider__title">
                            <div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num slider__title-active"></div><div class="slider__title-num"></div>
                        </div>
                        <div class="slider__question en" style="text-align:center;line-height:1.3;">
                            Do you want your wife to suck your dick every morning?
                        </div>
                        <div class="slider__question es" style="text-align:center;line-height:1.3;">
                        ¿Quieres que tu esposa te la chupe todas las mañanas?
                        </div>
                        <div class="slider__button">
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-first" id="button"><span class="en">Yes</span><span class="es">Sí</span></button>
                            </span>
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-skip" id="button">No</button>
                            </span>
                            <script>
                                function Go(Type) {
                                    document.getElementById('button').disabled = !Type;
                                }
                            </script>
                        </div>
                        <div class="img-quizz">
                        </div>
                        <div class="question en">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">Did you know?</span>
                            <span style="font-size: 0.75em;font-style: italic;"><?php echo ($productName) ?> naturally makes your penis bigger than usual.</span>
                        </div>
                        <div class="question es">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">¿Lo sabías?</span>
                            <span style="font-size: 0.75em;font-style: italic;"><?php echo ($productName) ?> naturalmente hace que su pene sea más grande.</span>
                        </div>
                    </div>
                    <div class="slide" style="display:none;">
                        <div class="slider__title">
                            <div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num"></div><div class="slider__title-num slider__title-active"></div>
                        </div>
                        <div class="slider__question en" style="text-align:center;line-height:1.3;">
                            Do you want to have sex every night with incredible pleasure?
                        </div>
                        <div class="slider__question es" style="text-align:center;line-height:1.3;">
                        ¿Quieres tener sexo todas las noches con increíble placer?
                        </div>
                        <div class="slider__button">
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-first" id="button" onclick="pushCookie();push_tj_cookie();"><span class="en">Yes</span><span class="es">Sí</span></button>
                            </span>
                            <span class="next-btn" data-scroll="#top">
                                <button class="button button-skip" id="button" onclick="pushCookie();push_tj_cookie();">No</button>
                            </span>
                            <script>
                                function Go(Type) {
                                    document.getElementById('button').disabled = !Type;
                                }
                            </script>
                        </div>
                        <div class="question en">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">Good to know!</span>
                            <span style="font-size: 0.75em;font-style: italic;">A man who does not satisfy his wife is 84% more likely to be cuckolded.</span>
                        </div>
                        <div class="question es">
					        <span style="display: block; margin: 0 0 10px;font-weight: bold;">Qué bueno saberlo!</span>
                            <span style="font-size: 0.75em;font-style: italic;">Un hombre que no satisface a su esposa en la cama tiene un 84% más de probabilidades de ser engañado.</span>
                        </div>
                    </div>
                    <div class="slide" style="display:none;">
                        <div class="end-slide-normal">
                            <div class="end-promo en">
					            <p style="display: block; margin: 0 0 20px;font-weight: bold;">THANKS FOR YOUR ANSWERS</p>
                                <p style="display: block; font-size: 0.6em;margin: 0 0 10px;">Your answers will help in the research of Professor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></p>
                                <p style="font-size: 0.6em;">You participated in the research and receive a <b>special discount</b> on <b><?php echo ($productName) ?></b></p>
                            </div>
                            <div class="end-promo es">
					            <p style="display: block; margin: 0 0 20px;font-weight: bold;">GRACIAS POR RESPONDER</p>
                                <p style="display: block; font-size: 0.6em;margin: 0 0 10px;">Tus respuestas ayudarán en la investigación del profesor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></p>
                                <p style="font-size: 0.6em;">Participaste en la investigación y recibes <b>un descuento especial</b> en <b><?php echo ($productName) ?></b></p>
                            </div>
                        </div>
                        <div class="end-slide-howold">
                            <div class="end-promo en">
					            <p style="display: block; margin: 0 0 20px;font-weight: bold;">THANKS FOR YOUR ANSWERS</p>
                                <p style="display: block; font-size: 0.6em;margin: 0 0 20px;">Your answers will help in the research of Professor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></p>
                                <p style="display: block; font-size: 0.6em;margin: 0 0 20px;">At the moment, the priority in the study was given to the age group of <b><span class="howold-div"></span></b></p>
                                <p style="display: block; font-size: 0.6em;margin: 0 0 20px;">You have reached the <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;white-space:nowrap;">target audience</span></p>
                                <p style="display: block; font-size: 0.6em;">This age group gets a <b>50% discount</b> on <b><?php echo ($productName) ?></b></p>
                            </div>
                            <div class="end-promo es">
					            <p style="display: block; margin: 0 0 20px;font-weight: bold;">GRACIAS POR RESPONDER</p>
                                <p style="display: block; font-size: 0.6em;margin: 0 0 10px;">Tus respuestas ayudarán en la investigación del profesor <?php echo ($firstVarNameEn.' '.$firstVarSurnameEn) ?></p>
                                <p style="display: block; font-size: 0.6em;margin: 0 0 10px;">La prioridad en el estudio en este momento se le dio al grupo de edad de <b><span class="howold-div"></span></b></p>
                                <p style="display: block; font-size: 0.6em;margin: 0 0 10px;">Has llegado al <span style="background-color:#de2600;color:#fff;padding:3px 5px;border-radius:3px;white-space:nowrap;">público objetivo</span></p>
                                <p style="display: block; font-size: 0.6em;">Este grupo de edad obtiene un <b>50 % de descuento</b> en <b><?php echo ($productName) ?></b></p>
                            </div>
                        </div>
                        <a href="<?=$offerLink?>" class="button"><span class="en">Get your discount</span><span class="es">OBTÉN TU DESCUENTO</span></a>
                        <img style="display:block;margin: 35px auto 35px auto;width:60%;max-width:300px;" src="img/prod.png">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript" src="js/lang-switch.js"></script>
    <script type="text/javascript" src="js/cookiequizz.js"></script>

    <script>
        // PLQuizz
        tracker_url = 'https://secret-health-001.com/';

        function lp_update_token(token, value, clickid) {
            const elem = document.createElement("img");
            elem.src = tracker_url + 'click.php?clickid=' + clickid + '&' + token + '=' + value;
        };
        setTimeout(function () {
            lp_update_token('event5', '1', '<?= $clickid ?>');
        }, 500);
        // PLQuizz
    </script>

    <script>    
        // tjcookie
        function push_tj_cookie() {
            const elem = document.createElement("img");
            elem.src = 'https://ctrack.trafficjunky.net/ctrack?action=list&type=add&id=quizzpass&context=bvz&cookiename=retargeting&age=43200&maxcookiecount=10';
        };
        // tjcookie
    </script>

</body>
</html>
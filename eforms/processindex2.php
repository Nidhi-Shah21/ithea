<?php



require __DIR__ . '/vendor/autoload.php';

require_once 'includes/email2.php';

require_once 'includes/db.php';

require_once 'includes/config.php';





use Dompdf\Dompdf;



//Insert Data;

$db = new DB;

if(isset($_POST) && isset($_POST['input1']) && $_POST['input1'] != '' && isset($_POST['input5']) && $_POST['input5'] != ''){
    $str = serialize($_POST);

    $params = [

        'form_type' => 'pretraining',
        'data' => $str
    ];

//print_r($str);
//die();

    $_sql = "INSERT INTO eforms_data(`form_type`,`data`) VALUES(:form_type,:data)";

    $res = $db->insertData($_sql, $params);

}else{
    header("Location: pre-training-form.php");
    exit;
    die();
}



//Generate PDF;

$dompdf = new Dompdf();



$a = file_get_contents('rawindex2.html');





$replace = isset($_POST['input1']) ? $_POST['input1'] : '';

$a = str_replace("xx_input1_xx", $replace, $a);



$replace = isset($_POST['input2']) ? $_POST['input2'] : '';

$a = str_replace("xx_input2_xx", $replace, $a);



$replace = isset($_POST['input3']) ? $_POST['input3'] : '';

$a = str_replace("xx_input3_xx", $replace, $a);



$replace = isset($_POST['input4']) ? $_POST['input4'] : '';

$a = str_replace("xx_input4_xx", $replace, $a);



$replace = isset($_POST['input5']) ? $_POST['input5'] : '';

$a = str_replace("xx_input5_xx", $replace, $a);



$replace = isset($_POST['input6']) ? $_POST['input6'] : '';

$a = str_replace("xx_input6_xx", $replace, $a);



$replace = isset($_POST['input7']) ? $_POST['input7'] : '';

$a = str_replace("xx_input7_xx", $replace, $a);



$replace = isset($_POST['input8']) ? $_POST['input8'] : '';

$a = str_replace("xx_input8_xx", $replace, $a);



$replace = isset($_POST['input9']) ? $_POST['input9'] : '';

$a = str_replace("xx_input9_xx", $replace, $a);



$replace = isset($_POST['input10']) ? $_POST['input10'] : '';

$a = str_replace("xx_input10_xx", $replace, $a);



$replace = isset($_POST['input11']) ? $_POST['input11'] : '';

$a = str_replace("xx_input11_xx", $replace, $a);



$replace = isset($_POST['input12']) ? $_POST['input12'] : '';

$a = str_replace("xx_input12_xx", $replace, $a);



$replace = isset($_POST['input13']) ? $_POST['input13'] : '';

$a = str_replace("xx_input13_xx", $replace, $a);



$replace = isset($_POST['input14']) ? $_POST['input14'] : '';

$a = str_replace("xx_input14_xx", $replace, $a);



$replace = isset($_POST['input15']) ? $_POST['input15'] : '';

$a = str_replace("xx_input15_xx", $replace, $a);



$replace = isset($_POST['input16']) ? $_POST['input16'] : '';

$a = str_replace("xx_input16_xx", $replace, $a);



$replace = isset($_POST['input17']) ? $_POST['input17'] : '';

$a = str_replace("xx_input17_xx", $replace, $a);



$replace = isset($_POST['input18']) ? $_POST['input18'] : '';

$a = str_replace("xx_input18_xx", $replace, $a);



$replace = isset($_POST['input19']) ? $_POST['input19'] : '';

$a = str_replace("xx_input19_xx", $replace, $a);



$replace = isset($_POST['input20']) ? $_POST['input20'] : '';

$a = str_replace("xx_input20_xx", $replace, $a);



$replace = isset($_POST['input21']) ? $_POST['input21'] : '';

$a = str_replace("xx_input21_xx", $replace, $a);



$replace = isset($_POST['texthow']) ? $_POST['texthow'] : '';

$a = str_replace("xx_texthow_xx", $replace, $a);


$replace = isset($_POST['textare']) ? $_POST['textare'] : '';

$a = str_replace("xx_textare_xx", $replace, $a);


$replace = isset($_POST['input22']) ? $_POST['input22'] : '';

$a = str_replace("xx_input22_xx", $replace, $a);


$replace = isset($_POST['input23']) ? $_POST['input23'] : '';

$a = str_replace("xx_input23_xx", $replace, $a);



$replace = isset($_POST['input24']) ? $_POST['input24'] : '';

$a = str_replace("xx_input24_xx", $replace, $a);



$replace = isset($_POST['input25']) ? $_POST['input25'] : '';

$a = str_replace("xx_input25_xx", $replace, $a);



$replace = isset($_POST['input26']) ? $_POST['input26'] : '';

$a = str_replace("xx_input26_xx", $replace, $a);



$replace = isset($_POST['input27']) ? $_POST['input27'] : '';

$a = str_replace("xx_input27_xx", $replace, $a);



$replace = isset($_POST['input28']) ? $_POST['input28'] : '';

$a = str_replace("xx_input28_xx", $replace, $a);



$replace = isset($_POST['input29']) ? $_POST['input29'] : '';

$a = str_replace("xx_input29_xx", $replace, $a);



$replace = isset($_POST['input30']) ? $_POST['input30'] : '';

$a = str_replace("xx_input30_xx", $replace, $a);



$replace = isset($_POST['input31']) ? $_POST['input31'] : '';

$a = str_replace("xx_input31_xx", $replace, $a);



$replace = isset($_POST['input32']) ? $_POST['input32'] : '';

$a = str_replace("xx_input32_xx", $replace, $a);



$replace = isset($_POST['input33']) ? $_POST['input33'] : '';

$a = str_replace("xx_input33_xx", $replace, $a);



$replace = isset($_POST['input34']) ? $_POST['input34'] : '';

$a = str_replace("xx_input34_xx", $replace, $a);



$replace = isset($_POST['input35']) ? $_POST['input35'] : '';

$a = str_replace("xx_input35_xx", $replace, $a);



$replace = isset($_POST['input36']) ? $_POST['input36'] : '';

$a = str_replace("xx_input36_xx", $replace, $a);



$replace = isset($_POST['input37']) ? $_POST['input37'] : '';

$a = str_replace("xx_input37_xx", $replace, $a);



$replace = isset($_POST['input38']) ? $_POST['input38'] : '';

$a = str_replace("xx_input38_xx", $replace, $a);



$replace = isset($_POST['input40']) ? $_POST['input40'] : '';

$a = str_replace("xx_input40_xx", $replace, $a);



$replace = isset($_POST['input41']) ? $_POST['input41'] : '';

$a = str_replace("xx_input41_xx", $replace, $a);



$replace = isset($_POST['input42']) ? $_POST['input42'] : '';

$a = str_replace("xx_input42_xx", $replace, $a);



$replace = isset($_POST['input43']) ? $_POST['input43'] : '';

$a = str_replace("xx_input43_xx", $replace, $a);



$replace = isset($_POST['input44']) ? $_POST['input44'] : '';

$a = str_replace("xx_input44_xx", $replace, $a);



$replace = isset($_POST['input45']) ? $_POST['input45'] : '';

$a = str_replace("xx_input45_xx", $replace, $a);



$replace = isset($_POST['input46']) ? $_POST['input46'] : '';

$a = str_replace("xx_input46_xx", $replace, $a);



$replace = isset($_POST['input47']) ? $_POST['input47'] : '';

$a = str_replace("xx_input47_xx", $replace, $a);



$replace = isset($_POST['input48']) ? $_POST['input48'] : '';

$a = str_replace("xx_input48_xx", $replace, $a);



$replace = isset($_POST['input49']) ? $_POST['input49'] : '';

$a = str_replace("xx_input49_xx", $replace, $a);



$replace = isset($_POST['input50']) ? $_POST['input50'] : '';

$a = str_replace("xx_input50_xx", $replace, $a);



$replace = isset($_POST['input51']) ? $_POST['input51'] : '';

$a = str_replace("xx_input51_xx", $replace, $a);



$replace = isset($_POST['input52']) ? $_POST['input52'] : '';

$a = str_replace("xx_input52_xx", $replace, $a);



$replace = isset($_POST['input53']) ? $_POST['input53'] : '';

$a = str_replace("xx_input53_xx", $replace, $a);



$replace = isset($_POST['input54']) ? $_POST['input54'] : '';

$a = str_replace("xx_input54_xx", $replace, $a);



$replace = isset($_POST['input55']) ? $_POST['input55'] : '';

$a = str_replace("xx_input55_xx", $replace, $a);



$replace = isset($_POST['input56']) ? $_POST['input56'] : '';

$a = str_replace("xx_input56_xx", $replace, $a);

if($_POST['dl1']==1){
    $dlvalue11="";
    $dlvalue12="un";
    $dlvalue13="un";
}
elseif($_POST['dl1']==2){
    $dlvalue11="un";
    $dlvalue12="";
    $dlvalue13="un";
}
elseif($_POST['dl1']==3){
    $dlvalue11="un";
    $dlvalue12="un";
    $dlvalue13="";
}
$a = str_replace("dl1_1un", $dlvalue11, $a);
$a = str_replace("dl1_2un", $dlvalue12, $a);
$a = str_replace("dl1_3un", $dlvalue13, $a);

if($_POST['dl2']==1){
    $dlvalue21="";
    $dlvalue22="un";
    $dlvalue23="un";
    $dlvalue24="un";
}
elseif($_POST['dl2']==2){
    $dlvalue21="un";
    $dlvalue22="";
    $dlvalue23="un";
    $dlvalue24="un";
}
elseif($_POST['dl2']==3){
    $dlvalue21="un";
    $dlvalue22="un";
    $dlvalue23="";
    $dlvalue24="un";
}
elseif($_POST['dl2']==4){
    $dlvalue21="un";
    $dlvalue22="un";
    $dlvalue23="un";
    $dlvalue24="";
}
$a = str_replace("dl2_1un", $dlvalue21, $a);
$a = str_replace("dl2_2un", $dlvalue22, $a);
$a = str_replace("dl2_3un", $dlvalue23, $a);
$a = str_replace("dl2_4un", $dlvalue24, $a);

if($_POST['dl3']==1){
    $dlvalue31="";
    $dlvalue32="un";
}
elseif($_POST['dl3']==2){
    $dlvalue31="un";
    $dlvalue32="";
}
$a = str_replace("dl3_1un", $dlvalue31, $a);
$a = str_replace("dl3_2un", $dlvalue32, $a);

if($_POST['dl4']==1){
    $dlvalue41="";
    $dlvalue42="un";
}
elseif($_POST['dl4']==2){
    $dlvalue41="un";
    $dlvalue42="";
}
$a = str_replace("dl4_1un", $dlvalue41, $a);
$a = str_replace("dl4_2un", $dlvalue42, $a);

if($_POST['dl5']==1){
    $dlvalue51="";
    $dlvalue52="un";
}
elseif($_POST['dl5']==2){
    $dlvalue51="un";
    $dlvalue52="";
}
$a = str_replace("dl5_1un", $dlvalue51, $a);
$a = str_replace("dl5_2un", $dlvalue52, $a);

if($_POST['ay0']==1){
    $ayvalue01="";
    $ayvalue02="un";
}
elseif($_POST['ay0']==2){
    $ayvalue01="un";
    $ayvalue02="";
}
$a = str_replace("ay0_1un", $ayvalue01, $a);
$a = str_replace("ay0_2un", $ayvalue02, $a);

if($_POST['ay1']==1){
    $ayvalue11="";
    $ayvalue12="un";
}
elseif($_POST['ay1']==2){
    $ayvalue11="un";
    $ayvalue12="";
}
$a = str_replace("ay1_1un", $ayvalue11, $a);
$a = str_replace("ay1_2un", $ayvalue12, $a);

if($_POST['ay2']==1){
    $ayvalue21="";
    $ayvalue22="un";
}
elseif($_POST['ay2']==2){
    $ayvalue21="un";
    $ayvalue22="";
}
$a = str_replace("ay2_1un", $ayvalue21, $a);
$a = str_replace("ay2_2un", $ayvalue22, $a);

if($_POST['ay3']==1){
    $ayvalue31="";
    $ayvalue32="un";
}
elseif($_POST['ay3']==2){
    $ayvalue31="un";
    $ayvalue32="";
}
$a = str_replace("ay3_1un", $ayvalue31, $a);
$a = str_replace("ay3_2un", $ayvalue32, $a);

if($_POST['ay4']==1){
    $ayvalue41="";
    $ayvalue42="un";
}
elseif($_POST['ay4']==2){
    $ayvalue41="un";
    $ayvalue42="";
}
$a = str_replace("ay4_1un", $ayvalue41, $a);
$a = str_replace("ay4_2un", $ayvalue42, $a);

if($_POST['ay5']==1){
    $ayvalue51="";
    $ayvalue52="un";
}
elseif($_POST['ay5']==2){
    $ayvalue51="un";
    $ayvalue52="";
}
$a = str_replace("ay5_1un", $ayvalue51, $a);
$a = str_replace("ay5_2un", $ayvalue52, $a);

if($_POST['ay6']==1){
    $ayvalue61="";
    $ayvalue62="un";
}
elseif($_POST['ay6']==2){
    $ayvalue61="un";
    $ayvalue62="";
}
$a = str_replace("ay6_1un", $ayvalue61, $a);
$a = str_replace("ay6_2un", $ayvalue62, $a);

if($_POST['ay7']==1){
    $ayvalue71="";
    $ayvalue72="un";
}
elseif($_POST['ay7']==2){
    $ayvalue71="un";
    $ayvalue72="";
}
$a = str_replace("ay7_1un", $ayvalue71, $a);
$a = str_replace("ay7_2un", $ayvalue72, $a);

if($_POST['ay8']==1){
    $ayvalue81="";
    $ayvalue82="un";
}
elseif($_POST['ay8']==2){
    $ayvalue81="un";
    $ayvalue82="";
}
$a = str_replace("ay8_1un", $ayvalue81, $a);
$a = str_replace("ay8_2un", $ayvalue82, $a);

if($_POST['ay9']==1){
    $ayvalue91="";
    $ayvalue92="un";
}
elseif($_POST['ay9']==2){
    $ayvalue91="un";
    $ayvalue92="";
}
$a = str_replace("ay9_1un", $ayvalue91, $a);
$a = str_replace("ay9_2un", $ayvalue92, $a);

if($_POST['ay10']==1){
    $ayvalue101="";
    $ayvalue102="un";
}
elseif($_POST['ay10']==2){
    $ayvalue101="un";
    $ayvalue102="";
}
$a = str_replace("ay10_1un", $ayvalue101, $a);
$a = str_replace("ay10_2un", $ayvalue102, $a);

if($_POST['ay11']==1){
    $ayvalue111="";
    $ayvalue112="un";
}
elseif($_POST['ay11']==2){
    $ayvalue111="un";
    $ayvalue112="";
}
$a = str_replace("ay11_1un", $ayvalue111, $a);
$a = str_replace("ay11_2un", $ayvalue112, $a);

$replace = isset($_POST['ay12']) ? $_POST['ay12'] : '';
$a = str_replace("ayvalue12", $replace, $a);

if($_POST['ay13']==1){
    $ayvalue131="";
    $ayvalue132="un";
}
elseif($_POST['ay13']==2){
    $ayvalue131="un";
    $ayvalue132="";
}
$a = str_replace("ay13_1un", $ayvalue131, $a);
$a = str_replace("ay13_2un", $ayvalue132, $a);

if($_POST['ay14']==1){
    $ayvalue141="";
    $ayvalue142="un";
}
elseif($_POST['ay14']==2){
    $ayvalue141="un";
    $ayvalue142="";
}
$a = str_replace("ay14_1un", $ayvalue141, $a);
$a = str_replace("ay14_2un", $ayvalue142, $a);

if($_POST['ay15']==1){
    $ayvalue151="";
    $ayvalue152="un";
}
elseif($_POST['ay15']==2){
    $ayvalue151="un";
    $ayvalue152="";
}
$a = str_replace("ay15_1un", $ayvalue151, $a);
$a = str_replace("ay15_2un", $ayvalue152, $a);

if($_POST['ay16']==1){
    $ayvalue161="";
    $ayvalue162="un";
}
elseif($_POST['ay16']==2){
    $ayvalue161="un";
    $ayvalue162="";
}
$a = str_replace("ay16_1un", $ayvalue161, $a);
$a = str_replace("ay16_2un", $ayvalue162, $a);

if(isset($_POST['checkbox1']) && $_POST['checkbox1'] != ''){

    $find = 'checkbox1_'.$_POST['checkbox1'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox1_', '', $a);



if(isset($_POST['checkbox2']) && $_POST['checkbox2'] != ''){

    $find = 'checkbox2_'.$_POST['checkbox2'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox2_', '', $a);



if(isset($_POST['checkbox3']) && $_POST['checkbox3'] != ''){

    $find = 'checkbox3_'.$_POST['checkbox3'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox3_', '', $a);



if(isset($_POST['checkbox4']) && $_POST['checkbox4'] != ''){

    $find = 'checkbox4_'.$_POST['checkbox4'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox4_', '', $a);



if(isset($_POST['checkbox5']) && $_POST['checkbox5'] != ''){

    $find = 'checkbox5_'.$_POST['checkbox5'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox5_', '', $a);



if(isset($_POST['checkbox6']) && $_POST['checkbox6'] != ''){

    $find = 'checkbox6_'.$_POST['checkbox6'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox6_', '', $a);



if(isset($_POST['checkbox7']) && $_POST['checkbox7'] != ''){

    $find = 'checkbox7_'.$_POST['checkbox7'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox7_', '', $a);



if(isset($_POST['checkbox8']) && $_POST['checkbox8'] != ''){

    $find = 'checkbox8_'.$_POST['checkbox8'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox8_', '', $a);



if(isset($_POST['checkbox9']) && $_POST['checkbox9'] != ''){

    $find = 'checkbox9_'.$_POST['checkbox9'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox9_', '', $a);



if(isset($_POST['checkbox10']) && $_POST['checkbox10'] != ''){

    $find = 'checkbox10_'.$_POST['checkbox10'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox10_', '', $a);



if(isset($_POST['checkbox11']) && $_POST['checkbox11'] != ''){

    $find = 'checkbox11_'.$_POST['checkbox11'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox11_', '', $a);



if(isset($_POST['checkbox12']) && $_POST['checkbox12'] != ''){

    $find = 'checkbox12_'.$_POST['checkbox12'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox12_', '', $a);



if(isset($_POST['checkbox13']) && $_POST['checkbox13'] != ''){

    $find = 'checkbox13_'.$_POST['checkbox13'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox13_', '', $a);



if(isset($_POST['checkbox14']) && $_POST['checkbox14'] != ''){

    $find = 'checkbox14_'.$_POST['checkbox14'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox14_', '', $a);



if(isset($_POST['checkbox15']) && $_POST['checkbox15'] != ''){

    $find = 'checkbox15_'.$_POST['checkbox15'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox15_', '', $a);



if(isset($_POST['checkbox16']) && $_POST['checkbox16'] != ''){

    $find = 'checkbox16_'.$_POST['checkbox16'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox16_', '', $a);



if(isset($_POST['checkbox17']) && $_POST['checkbox17'] != ''){

    $find = 'checkbox17_'.$_POST['checkbox17'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox17_', '', $a);



if(isset($_POST['checkbox18']) && $_POST['checkbox18'] != ''){

    $find = 'checkbox18_'.$_POST['checkbox18'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox18_', '', $a);



if(isset($_POST['checkbox19']) && $_POST['checkbox19'] != ''){

    $find = 'checkbox19_'.$_POST['checkbox19'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox19_', '', $a);



if(isset($_POST['checkbox20']) && $_POST['checkbox20'] != ''){

    $find = 'checkbox20_'.$_POST['checkbox20'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox20_', '', $a);



if(isset($_POST['checkbox21']) && $_POST['checkbox21'] != ''){

    $find = 'checkbox21_'.$_POST['checkbox21'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox21_', '', $a);



if(isset($_POST['checkbox22']) && $_POST['checkbox22'] != ''){

    $find = 'checkbox22_'.$_POST['checkbox22'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox22_', '', $a);



if(isset($_POST['checkbox23']) && $_POST['checkbox23'] != ''){

    $find = 'checkbox23_'.$_POST['checkbox23'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox23_', '', $a);



if(isset($_POST['checkbox24']) && $_POST['checkbox24'] != ''){

    $find = 'checkbox24_'.$_POST['checkbox24'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox24_', '', $a);



if(isset($_POST['checkbox25']) && $_POST['checkbox25'] != ''){

    $find = 'checkbox25_'.$_POST['checkbox25'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox25_', '', $a);



if(isset($_POST['checkbox26']) && $_POST['checkbox26'] != ''){

    $find = 'checkbox26_'.$_POST['checkbox26'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox26_', '', $a);



if(isset($_POST['checkbox27']) && $_POST['checkbox27'] != ''){

    $find = 'checkbox27_'.$_POST['checkbox27'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox27_', '', $a);



if(isset($_POST['checkbox28']) && $_POST['checkbox28'] != ''){

    $find = 'checkbox28_'.$_POST['checkbox28'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox28_', '', $a);



if(isset($_POST['checkbox29']) && $_POST['checkbox29'] != ''){

    $find = 'checkbox29_'.$_POST['checkbox29'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox29_', '', $a);



if(isset($_POST['checkboxnew1']) && $_POST['checkboxnew1'] != ''){

    $find = 'checkboxnew1_'.$_POST['checkboxnew1'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkboxnew1_', '', $a);



if(isset($_POST['checkbox30']) && $_POST['checkbox30'] != ''){

    $find = 'checkbox30_'.$_POST['checkbox30'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox30_', '', $a);



if(isset($_POST['checkboxnew2']) && $_POST['checkboxnew2'] != ''){

    $find = 'checkboxnew2_'.$_POST['checkboxnew2'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkboxnew2_', '', $a);



if(isset($_POST['checkbox31']) && $_POST['checkbox31'] != ''){

    $find = 'checkbox31_'.$_POST['checkbox31'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox31_', '', $a);



if(isset($_POST['checkbox32']) && $_POST['checkbox32'] != ''){

    $find = 'checkbox32_'.$_POST['checkbox32'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox32_', '', $a);




if(isset($_POST['checkbox98']) && $_POST['checkbox98'] != ''){

    $find = 'checkbox98_'.$_POST['checkbox98'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox98_', '', $a);



if(isset($_POST['checkbox99']) && $_POST['checkbox99'] != ''){

    $find = 'checkbox99_'.$_POST['checkbox99'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox99_', '', $a);



if(isset($_POST['checkbox33']) && $_POST['checkbox33'] != ''){

    $find = 'checkbox33_'.$_POST['checkbox33'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox33_', '', $a);



if(isset($_POST['checkbox34']) && $_POST['checkbox34'] != ''){

    $find = 'checkbox34_'.$_POST['checkbox34'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox34_', '', $a);



if(isset($_POST['checkbox35']) && $_POST['checkbox35'] != ''){

    $find = 'checkbox35_'.$_POST['checkbox35'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox35_', '', $a);



if(isset($_POST['checkbox36']) && $_POST['checkbox36'] != ''){

    $find = 'checkbox36_'.$_POST['checkbox36'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox36_', '', $a);



if(isset($_POST['checkbox37']) && $_POST['checkbox37'] != ''){

    $find = 'checkbox37_'.$_POST['checkbox37'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox37_', '', $a);



if(isset($_POST['checkbox38']) && $_POST['checkbox38'] != ''){

    $find = 'checkbox38_'.$_POST['checkbox38'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox38_', '', $a);



if(isset($_POST['checkbox39']) && $_POST['checkbox39'] != ''){

    $find = 'checkbox39_'.$_POST['checkbox39'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox39_', '', $a);



if(isset($_POST['checkbox40']) && $_POST['checkbox40'] != ''){

    $find = 'checkbox40_'.$_POST['checkbox40'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox40_', '', $a);



if(isset($_POST['checkbox41']) && $_POST['checkbox41'] != ''){

    $find = 'checkbox41_'.$_POST['checkbox41'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox41_', '', $a);



if(isset($_POST['checkbox42']) && $_POST['checkbox42'] != ''){

    $find = 'checkbox42_'.$_POST['checkbox42'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox42_', '', $a);



if(isset($_POST['checkbox43']) && $_POST['checkbox43'] != ''){

    $find = 'checkbox43_'.$_POST['checkbox43'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox43_', '', $a);



if(isset($_POST['checkbox44']) && $_POST['checkbox44'] != ''){

    $find = 'checkbox44_'.$_POST['checkbox44'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox44_', '', $a);



if(isset($_POST['checkbox45']) && $_POST['checkbox45'] != ''){

    $find = 'checkbox45_'.$_POST['checkbox45'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox45_', '', $a);



if(isset($_POST['checkbox46']) && $_POST['checkbox46'] != ''){

    $find = 'checkbox46_'.$_POST['checkbox46'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox46_', '', $a);



if(isset($_POST['checkbox47']) && $_POST['checkbox47'] != ''){

    $find = 'checkbox47_'.$_POST['checkbox47'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox47_', '', $a);



if(isset($_POST['checkbox48']) && $_POST['checkbox48'] != ''){

    $find = 'checkbox48_'.$_POST['checkbox48'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox48_', '', $a);



if(isset($_POST['checkbox49']) && $_POST['checkbox49'] != ''){

    $find = 'checkbox49_'.$_POST['checkbox49'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox49_', '', $a);



if(isset($_POST['checkbox50']) && $_POST['checkbox50'] != ''){

    $find = 'checkbox50_'.$_POST['checkbox50'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox50_', '', $a);



if(isset($_POST['checkbox51']) && $_POST['checkbox51'] != ''){

    $find = 'checkbox51_'.$_POST['checkbox51'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox51_', '', $a);



if(isset($_POST['checkbox52']) && $_POST['checkbox52'] != ''){

    $find = 'checkbox52_'.$_POST['checkbox52'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox52_', '', $a);



if(isset($_POST['checkbox53']) && $_POST['checkbox53'] != ''){

    $find = 'checkbox53_'.$_POST['checkbox53'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox53_', '', $a);



if(isset($_POST['checkbox54']) && $_POST['checkbox54'] != ''){

    $find = 'checkbox54_'.$_POST['checkbox54'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox54_', '', $a);



if(isset($_POST['checkbox55']) && $_POST['checkbox55'] != ''){

    $find = 'checkbox55_'.$_POST['checkbox55'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox55_', '', $a);



if(isset($_POST['checkbox56']) && $_POST['checkbox56'] != ''){

    $find = 'checkbox56_'.$_POST['checkbox56'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox56_', '', $a);



if(isset($_POST['checkbox57']) && $_POST['checkbox57'] != ''){

    $find = 'checkbox57_'.$_POST['checkbox57'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox57_', '', $a);



if(isset($_POST['checkbox58']) && $_POST['checkbox58'] != ''){

    $find = 'checkbox58_'.$_POST['checkbox58'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox58_', '', $a);



if(isset($_POST['checkbox59']) && $_POST['checkbox59'] != ''){

    $find = 'checkbox59_'.$_POST['checkbox59'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox59_', '', $a);



if(isset($_POST['checkbox60']) && $_POST['checkbox60'] != ''){

    $find = 'checkbox60_'.$_POST['checkbox60'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox60_', '', $a);



if(isset($_POST['checkbox61']) && $_POST['checkbox61'] != ''){

    $find = 'checkbox61_'.$_POST['checkbox61'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox61_', '', $a);



if(isset($_POST['checkbox62']) && $_POST['checkbox62'] != ''){

    $find = 'checkbox62_'.$_POST['checkbox62'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox62_', '', $a);



if(isset($_POST['checkbox63']) && $_POST['checkbox63'] != ''){

    $find = 'checkbox63_'.$_POST['checkbox63'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox63_', '', $a);



if(isset($_POST['checkbox64']) && $_POST['checkbox64'] != ''){

    $find = 'checkbox64_'.$_POST['checkbox64'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox64_', '', $a);



if(isset($_POST['checkbox65']) && $_POST['checkbox65'] != ''){

    $find = 'checkbox65_'.$_POST['checkbox65'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox65_', '', $a);

$parttworeading = 0;
if($_POST['checkbox65']==1){
    $a = str_replace("mcrw11", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrw12", '', $a);
    $a = str_replace("mcrw13", '', $a);
}
elseif($_POST['checkbox65']==2){
    $a = str_replace("mcrw11", '', $a);
    $a = str_replace("mcrw12", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrw13", '', $a);
    $parttworeading++;
}
elseif($_POST['checkbox65']==3){
    $a = str_replace("mcrw11", '', $a);
    $a = str_replace("mcrw12", '', $a);
    $a = str_replace("mcrw13", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox66']==1){
    $a = str_replace("mcrw21", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrw22", '', $a);
    $a = str_replace("mcrw23", '', $a);
    $parttworeading++;
}
elseif($_POST['checkbox66']==2){
    $a = str_replace("mcrw21", '', $a);
    $a = str_replace("mcrw22", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrw23", '', $a);
}
elseif($_POST['checkbox66']==3){
    $a = str_replace("mcrw21", '', $a);
    $a = str_replace("mcrw22", '', $a);
    $a = str_replace("mcrw23", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox67']==1){
    $a = str_replace("mcrw31", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrw32", '', $a);
    $a = str_replace("mcrw33", '', $a);
}
elseif($_POST['checkbox67']==2){
    $a = str_replace("mcrw31", '', $a);
    $a = str_replace("mcrw32", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrw33", '', $a);
}
elseif($_POST['checkbox67']==3){
    $a = str_replace("mcrw31", '', $a);
    $a = str_replace("mcrw32", '', $a);
    $a = str_replace("mcrw33", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $parttworeading++;
}

if($_POST['checkbox68']==1){
    $a = str_replace("mcrw41", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrw42", '', $a);
    $a = str_replace("mcrw43", '', $a);
    $parttworeading++;
}
elseif($_POST['checkbox68']==2){
    $a = str_replace("mcrw41", '', $a);
    $a = str_replace("mcrw42", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrw43", '', $a);
}
elseif($_POST['checkbox68']==3){
    $a = str_replace("mcrw41", '', $a);
    $a = str_replace("mcrw42", '', $a);
    $a = str_replace("mcrw43", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox69']==1){
    $a = str_replace("mcrw51", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrw52", '', $a);
    $a = str_replace("mcrw53", '', $a);
}
elseif($_POST['checkbox69']==2){
    $a = str_replace("mcrw51", '', $a);
    $a = str_replace("mcrw52", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrw53", '', $a);
    $parttworeading++;
}
elseif($_POST['checkbox69']==3){
    $a = str_replace("mcrw51", '', $a);
    $a = str_replace("mcrw52", '', $a);
    $a = str_replace("mcrw53", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox70']==1){
    $a = str_replace("mcrw61", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrw62", '', $a);
    $a = str_replace("mcrw63", '', $a);
}
elseif($_POST['checkbox70']==2){
    $a = str_replace("mcrw61", '', $a);
    $a = str_replace("mcrw62", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrw63", '', $a);
}
elseif($_POST['checkbox70']==3){
    $a = str_replace("mcrw61", '', $a);
    $a = str_replace("mcrw62", '', $a);
    $a = str_replace("mcrw63", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $parttworeading++;
}

if($_POST['checkbox71']==1){
    $a = str_replace("mcrw71", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrw72", '', $a);
    $a = str_replace("mcrw73", '', $a);
}
elseif($_POST['checkbox71']==2){
    $a = str_replace("mcrw71", '', $a);
    $a = str_replace("mcrw72", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrw73", '', $a);
    $parttworeading++;
}
elseif($_POST['checkbox71']==3){
    $a = str_replace("mcrw71", '', $a);
    $a = str_replace("mcrw72", '', $a);
    $a = str_replace("mcrw73", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox72']==1){
    $a = str_replace("mcrw81", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrw82", '', $a);
    $a = str_replace("mcrw83", '', $a);
    $parttworeading++;
}
elseif($_POST['checkbox72']==2){
    $a = str_replace("mcrw81", '', $a);
    $a = str_replace("mcrw82", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrw83", '', $a);
}
elseif($_POST['checkbox72']==3){
    $a = str_replace("mcrw81", '', $a);
    $a = str_replace("mcrw82", '', $a);
    $a = str_replace("mcrw83", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox73']==1){
    $a = str_replace("mcrw91", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrw92", '', $a);
    $a = str_replace("mcrw93", '', $a);
}
elseif($_POST['checkbox73']==2){
    $a = str_replace("mcrw91", '', $a);
    $a = str_replace("mcrw92", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrw93", '', $a);
    $parttworeading++;
}
elseif($_POST['checkbox73']==3){
    $a = str_replace("mcrw91", '', $a);
    $a = str_replace("mcrw92", '', $a);
    $a = str_replace("mcrw93", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox74']==1){
    $a = str_replace("mcrwb101", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwb102", '', $a);
    $a = str_replace("mcrwb103", '', $a);
}
elseif($_POST['checkbox74']==2){
    $a = str_replace("mcrwb101", '', $a);
    $a = str_replace("mcrwb102", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrwb103", '', $a);
    $parttworeading++;
}
elseif($_POST['checkbox74']==3){
    $a = str_replace("mcrwb101", '', $a);
    $a = str_replace("mcrwb102", '', $a);
    $a = str_replace("mcrwb103", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox75']==1){
    $a = str_replace("mcrwb111", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwb112", '', $a);
    $a = str_replace("mcrwb113", '', $a);
}
elseif($_POST['checkbox75']==2){
    $a = str_replace("mcrwb111", '', $a);
    $a = str_replace("mcrwb112", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwb113", '', $a);
}
elseif($_POST['checkbox75']==3){
    $a = str_replace("mcrwb111", '', $a);
    $a = str_replace("mcrwb112", '', $a);
    $a = str_replace("mcrwb113", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $parttworeading++;
}

if($_POST['checkbox76']==1){
    $a = str_replace("mcrwb121", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrwb122", '', $a);
    $a = str_replace("mcrwb123", '', $a);
    $parttworeading++;
}
elseif($_POST['checkbox76']==2){
    $a = str_replace("mcrwb121", '', $a);
    $a = str_replace("mcrwb122", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwb123", '', $a);
}
elseif($_POST['checkbox76']==3){
    $a = str_replace("mcrwb121", '', $a);
    $a = str_replace("mcrwb122", '', $a);
    $a = str_replace("mcrwb123", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

$a = str_replace("parttworeadingtotal", $parttworeading, $a);

$partnumeracy = 0;
if($_POST['checkbox83']==1){
    $a = str_replace("mcrwn11", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn12", '', $a);
    $a = str_replace("mcrwn13", '', $a);
}
elseif($_POST['checkbox83']==2){
    $a = str_replace("mcrwn11", '', $a);
    $a = str_replace("mcrwn12", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrwn13", '', $a);
    $partnumeracy++;
}
elseif($_POST['checkbox83']==3){
    $a = str_replace("mcrwn11", '', $a);
    $a = str_replace("mcrwn12", '', $a);
    $a = str_replace("mcrwn13", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox84']==1){
    $a = str_replace("mcrwn21", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrwn22", '', $a);
    $a = str_replace("mcrwn23", '', $a);
    $a = str_replace("mcrwn24", '', $a);
    $partnumeracy++;
}
elseif($_POST['checkbox84']==2){
    $a = str_replace("mcrwn21", '', $a);
    $a = str_replace("mcrwn22", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn23", '', $a);
    $a = str_replace("mcrwn24", '', $a);
}
elseif($_POST['checkbox84']==3){
    $a = str_replace("mcrwn21", '', $a);
    $a = str_replace("mcrwn22", '', $a);
    $a = str_replace("mcrwn23", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn24", '', $a);
}
elseif($_POST['checkbox84']==4){
    $a = str_replace("mcrwn21", '', $a);
    $a = str_replace("mcrwn22", '', $a);
    $a = str_replace("mcrwn23", '', $a);
    $a = str_replace("mcrwn24", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox85']==1){
    $a = str_replace("mcrwn31", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrwn32", '', $a);
    $a = str_replace("mcrwn33", '', $a);
    $a = str_replace("mcrwn34", '', $a);
    $partnumeracy++;
}
elseif($_POST['checkbox85']==2){
    $a = str_replace("mcrwn31", '', $a);
    $a = str_replace("mcrwn32", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn33", '', $a);
    $a = str_replace("mcrwn34", '', $a);
}
elseif($_POST['checkbox85']==3){
    $a = str_replace("mcrwn31", '', $a);
    $a = str_replace("mcrwn32", '', $a);
    $a = str_replace("mcrwn33", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn34", '', $a);
}
elseif($_POST['checkbox85']==4){
    $a = str_replace("mcrwn31", '', $a);
    $a = str_replace("mcrwn32", '', $a);
    $a = str_replace("mcrwn33", '', $a);
    $a = str_replace("mcrwn34", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox86']==1){
    $a = str_replace("mcrwn41", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn42", '', $a);
    $a = str_replace("mcrwn43", '', $a);
}
elseif($_POST['checkbox86']==2){
    $a = str_replace("mcrwn41", '', $a);
    $a = str_replace("mcrwn42", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn43", '', $a);
}
elseif($_POST['checkbox86']==3){
    $a = str_replace("mcrwn41", '', $a);
    $a = str_replace("mcrwn42", '', $a);
    $a = str_replace("mcrwn43", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $partnumeracy++;
}

if($_POST['checkbox87']==1){
    $a = str_replace("mcrwn51", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn52", '', $a);
}
elseif($_POST['checkbox87']==2){
    $a = str_replace("mcrwn51", '', $a);
    $a = str_replace("mcrwn52", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $partnumeracy++;
}

if($_POST['checkbox88']==1){
    $a = str_replace("mcrwn61", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn62", '', $a);
    $a = str_replace("mcrwn63", '', $a);
}
elseif($_POST['checkbox88']==2){
    $a = str_replace("mcrwn61", '', $a);
    $a = str_replace("mcrwn62", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn63", '', $a);
}
elseif($_POST['checkbox88']==3){
    $a = str_replace("mcrwn61", '', $a);
    $a = str_replace("mcrwn62", '', $a);
    $a = str_replace("mcrwn63", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $partnumeracy++;
}

if($_POST['checkbox89']==1){
    $a = str_replace("mcrwn71", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrwn72", '', $a);
    $a = str_replace("mcrwn73", '', $a);
    $partnumeracy++;
}
elseif($_POST['checkbox89']==2){
    $a = str_replace("mcrwn71", '', $a);
    $a = str_replace("mcrwn72", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn73", '', $a);
}
elseif($_POST['checkbox89']==3){
    $a = str_replace("mcrwn71", '', $a);
    $a = str_replace("mcrwn72", '', $a);
    $a = str_replace("mcrwn73", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox90']==1){
    $a = str_replace("mcrwn81", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn82", '', $a);
    $a = str_replace("mcrwn83", '', $a);
}
elseif($_POST['checkbox90']==2){
    $a = str_replace("mcrwn81", '', $a);
    $a = str_replace("mcrwn82", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrwn83", '', $a);
    $partnumeracy++;
}
elseif($_POST['checkbox90']==3){
    $a = str_replace("mcrwn81", '', $a);
    $a = str_replace("mcrwn82", '', $a);
    $a = str_replace("mcrwn83", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox91']==1){
    $a = str_replace("mcrwn91", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn92", '', $a);
    $a = str_replace("mcrwn93", '', $a);
}
elseif($_POST['checkbox91']==2){
    $a = str_replace("mcrwn91", '', $a);
    $a = str_replace("mcrwn92", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwn93", '', $a);
}
elseif($_POST['checkbox91']==3){
    $a = str_replace("mcrwn91", '', $a);
    $a = str_replace("mcrwn92", '', $a);
    $a = str_replace("mcrwn93", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $partnumeracy++;
}

if($_POST['checkbox92']==1){
    $a = str_replace("mcrwna101", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrwna102", '', $a);
    $a = str_replace("mcrwna103", '', $a);
    $partnumeracy++;
}
elseif($_POST['checkbox92']==2){
    $a = str_replace("mcrwna101", '', $a);
    $a = str_replace("mcrwna102", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwna103", '', $a);
}
elseif($_POST['checkbox92']==3){
    $a = str_replace("mcrwna101", '', $a);
    $a = str_replace("mcrwna102", '', $a);
    $a = str_replace("mcrwna103", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox93']==1){
    $a = str_replace("mcrwna111", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrwna112", '', $a);
    $partnumeracy++;
}
elseif($_POST['checkbox93']==2){
    $a = str_replace("mcrwna111", '', $a);
    $a = str_replace("mcrwna112", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox94']==1){
    $a = str_replace("mcrwna121", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwna122", '', $a);
    $a = str_replace("mcrwna123", '', $a);
}
elseif($_POST['checkbox94']==2){
    $a = str_replace("mcrwna121", '', $a);
    $a = str_replace("mcrwna122", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwna123", '', $a);
}
elseif($_POST['checkbox94']==3){
    $a = str_replace("mcrwna121", '', $a);
    $a = str_replace("mcrwna122", '', $a);
    $a = str_replace("mcrwna123", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $partnumeracy++;
}

if($_POST['checkbox95']==1){
    $a = str_replace("mcrwna131", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwna132", '', $a);
    $a = str_replace("mcrwna133", '', $a);
}
elseif($_POST['checkbox95']==2){
    $a = str_replace("mcrwna131", '', $a);
    $a = str_replace("mcrwna132", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $a = str_replace("mcrwna133", '', $a);
    $partnumeracy++;
}
elseif($_POST['checkbox95']==3){
    $a = str_replace("mcrwna131", '', $a);
    $a = str_replace("mcrwna132", '', $a);
    $a = str_replace("mcrwna133", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
}

if($_POST['checkbox96']==1){
    $a = str_replace("mcrwna141", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwna142", '', $a);
    $a = str_replace("mcrwna143", '', $a);
}
elseif($_POST['checkbox96']==2){
    $a = str_replace("mcrwna141", '', $a);
    $a = str_replace("mcrwna142", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwna143", '', $a);
}
elseif($_POST['checkbox96']==3){
    $a = str_replace("mcrwna141", '', $a);
    $a = str_replace("mcrwna142", '', $a);
    $a = str_replace("mcrwna143", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $partnumeracy++;
}

if($_POST['checkbox97']==1){
    $a = str_replace("mcrwna151", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwna152", '', $a);
    $a = str_replace("mcrwna153", '', $a);
}
elseif($_POST['checkbox97']==2){
    $a = str_replace("mcrwna151", '', $a);
    $a = str_replace("mcrwna152", '&nbsp;&nbsp;<span style="color:red;font-size:20px;"><strong>X</strong></span>', $a);
    $a = str_replace("mcrwna153", '', $a);
}
elseif($_POST['checkbox97']==3){
    $a = str_replace("mcrwna151", '', $a);
    $a = str_replace("mcrwna152", '', $a);
    $a = str_replace("mcrwna153", '&nbsp;&nbsp;<span style="color:green;font-size:20px;"><img src="images/tic.jpg" alt="" style="display:inline; width: 17px;" /></span>', $a);
    $partnumeracy++;
}

$a = str_replace("partnumeracytotal", $partnumeracy, $a);


if(isset($_POST['checkboxdo']) && $_POST['checkboxdo'] != ''){

    $find = 'checkboxdo_'.$_POST['checkboxdo'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkboxdo_', '', $a);

if(isset($_POST['checkboxwhat']) && $_POST['checkboxwhat'] != ''){

    $find = 'checkboxwhat_'.$_POST['checkboxwhat'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkboxwhat_', '', $a);

if(isset($_POST['checkboxsmart']) && $_POST['checkboxsmart'] != ''){

    $find = 'checkboxsmart_'.$_POST['checkboxsmart'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkboxsmart_', '', $a);


if(isset($_POST['checkbox66']) && $_POST['checkbox66'] != ''){

    $find = 'checkbox66_'.$_POST['checkbox66'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox66_', '', $a);



if(isset($_POST['checkbox67']) && $_POST['checkbox67'] != ''){

    $find = 'checkbox67_'.$_POST['checkbox67'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox67_', '', $a);



if(isset($_POST['checkbox68']) && $_POST['checkbox68'] != ''){

    $find = 'checkbox68_'.$_POST['checkbox68'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox68_', '', $a);



if(isset($_POST['checkbox69']) && $_POST['checkbox69'] != ''){

    $find = 'checkbox69_'.$_POST['checkbox69'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox69_', '', $a);



if(isset($_POST['checkbox70']) && $_POST['checkbox70'] != ''){

    $find = 'checkbox70_'.$_POST['checkbox70'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox70_', '', $a);



if(isset($_POST['checkbox71']) && $_POST['checkbox71'] != ''){

    $find = 'checkbox71_'.$_POST['checkbox71'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox71_', '', $a);



if(isset($_POST['checkbox72']) && $_POST['checkbox72'] != ''){

    $find = 'checkbox72_'.$_POST['checkbox72'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox72_', '', $a);



if(isset($_POST['checkbox73']) && $_POST['checkbox73'] != ''){

    $find = 'checkbox73_'.$_POST['checkbox73'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox73_', '', $a);



if(isset($_POST['checkbox74']) && $_POST['checkbox74'] != ''){

    $find = 'checkbox74_'.$_POST['checkbox74'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox74_', '', $a);



if(isset($_POST['checkbox75']) && $_POST['checkbox75'] != ''){

    $find = 'checkbox75_'.$_POST['checkbox75'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox75_', '', $a);



if(isset($_POST['checkbox76']) && $_POST['checkbox76'] != ''){

    $find = 'checkbox76_'.$_POST['checkbox76'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox76_', '', $a);



if(isset($_POST['checkbox77']) && $_POST['checkbox77'] != ''){

    $find = 'checkbox77_'.$_POST['checkbox77'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox77_', '', $a);



if(isset($_POST['checkbox78']) && $_POST['checkbox78'] != ''){

    $find = 'checkbox78_'.$_POST['checkbox78'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox78_', '', $a);



if(isset($_POST['checkbox79']) && $_POST['checkbox79'] != ''){

    $find = 'checkbox79_'.$_POST['checkbox79'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox79_', '', $a);



if(isset($_POST['checkbox80']) && $_POST['checkbox80'] != ''){

    $find = 'checkbox80_'.$_POST['checkbox80'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox80_', '', $a);



if(isset($_POST['checkbox81']) && $_POST['checkbox81'] != ''){

    $find = 'checkbox81_'.$_POST['checkbox81'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox81_', '', $a);



if(isset($_POST['checkbox82']) && $_POST['checkbox82'] != ''){

    $find = 'checkbox82_'.$_POST['checkbox82'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox82_', '', $a);



if(isset($_POST['checkbox83']) && $_POST['checkbox83'] != ''){

    $find = 'checkbox83_'.$_POST['checkbox83'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox83_', '', $a);



if(isset($_POST['checkbox84']) && $_POST['checkbox84'] != ''){

    $find = 'checkbox84_'.$_POST['checkbox84'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox84_', '', $a);



if(isset($_POST['checkbox85']) && $_POST['checkbox85'] != ''){

    $find = 'checkbox85_'.$_POST['checkbox85'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox85_', '', $a);



if(isset($_POST['checkbox86']) && $_POST['checkbox86'] != ''){

    $find = 'checkbox86_'.$_POST['checkbox86'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox86_', '', $a);



if(isset($_POST['checkbox87']) && $_POST['checkbox87'] != ''){

    $find = 'checkbox87_'.$_POST['checkbox87'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox87_', '', $a);



if(isset($_POST['checkbox88']) && $_POST['checkbox88'] != ''){

    $find = 'checkbox88_'.$_POST['checkbox88'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox88_', '', $a);



if(isset($_POST['checkbox89']) && $_POST['checkbox89'] != ''){

    $find = 'checkbox89_'.$_POST['checkbox89'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox89_', '', $a);



if(isset($_POST['checkbox90']) && $_POST['checkbox90'] != ''){

    $find = 'checkbox90_'.$_POST['checkbox90'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox90_', '', $a);



if(isset($_POST['checkbox91']) && $_POST['checkbox91'] != ''){

    $find = 'checkbox91_'.$_POST['checkbox91'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox91_', '', $a);



if(isset($_POST['checkbox92']) && $_POST['checkbox92'] != ''){

    $find = 'checkbox92_'.$_POST['checkbox92'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox92_', '', $a);



if(isset($_POST['checkbox93']) && $_POST['checkbox93'] != ''){

    $find = 'checkbox93_'.$_POST['checkbox93'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox93_', '', $a);



if(isset($_POST['checkbox94']) && $_POST['checkbox94'] != ''){

    $find = 'checkbox94_'.$_POST['checkbox94'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox94_', '', $a);



if(isset($_POST['checkbox95']) && $_POST['checkbox95'] != ''){

    $find = 'checkbox95_'.$_POST['checkbox95'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox95_', '', $a);



if(isset($_POST['checkbox96']) && $_POST['checkbox96'] != ''){

    $find = 'checkbox96_'.$_POST['checkbox96'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox96_', '', $a);



if(isset($_POST['checkbox97']) && $_POST['checkbox97'] != ''){

    $find = 'checkbox97_'.$_POST['checkbox97'].'un';

    $a = str_replace($find, '', $a);

}

$a = str_replace('checkbox97_', '', $a);







$dompdf->loadHtml($a);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

 // $dompdf->stream();



file_put_contents('index2.pdf', $dompdf->output());



//SEnd Mail

$_mail = new SendEmail;

$to = 'info@ithea.edu.au';
$name = 'ITHEA';

$subject = 'PreTraining Alert - "'.$_POST['input1'].'"';

// $subject = 'PreTraining Alert - "'.$_POST['input1'].'" ("'.$_POST['qualification'].'")';

$html  = 'You have received a PreTraining from the following student<br>';

$html  .= 'Name: '.$_POST['input1'].'<br>';

$html  .= 'Email: '.$_POST['input5'].'<br>';

// $html  .= 'Course: '.$_POST['placeOfResidence'].'<br>';



$mail = $_mail::send_email($name, $to, $subject, $html, '', '' );



if ( $mail ) {

    header("Location: thankyou.html");

}



header("Location: thankyou.html");

exit;


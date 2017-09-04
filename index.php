<?php

phpinfo();
echo 'fffwjw';

//latitude 纬度
//longitude 经度

/**
 * @param $lng1 经度
 * @param $lat1 纬度
 * @param $lng2 经度
 * @param $lat2 纬度
 * @param float $radius  星球半径
 * @return int
 */
function getDistance($lng1, $lat1, $lng2, $lat2, $radius = 6378.137){
    //将角度转为狐度
    $radLat1=deg2rad($lat1);//deg2rad()函数将角度转换为弧度
    $radLat2=deg2rad($lat2);

    $radLng1=deg2rad($lng1);
    $radLng2=deg2rad($lng2);
//var_dump($lng1, $radLng1, $lat1, $radLat1, $lng2, $radLng2, $lat2, $radLat2);die;
    $a=$radLat1-$radLat2;
    $b=$radLng1-$radLng2;

    $s=2*asin(sqrt(pow(sin($a/2),2)+cos($radLat1)*cos($radLat2)*pow(sin($b/2),2)))*$radius;
    return $s;
}

/**
 * @param $lon1 经度
 * @param $lat1 纬度
 * @param $lon2 经度
 * @param $lat2 纬度
 * @param float $radius  星球半径
 * @return float
 */
function distance($lon1, $lat1, $lon2, $lat2, $radius = 6378.137)
{
    $rad = floatval(M_PI / 180.0);

    $lat1 = floatval($lat1) * $rad;
    $lon1 = floatval($lon1) * $rad;
    $lat2 = floatval($lat2) * $rad;
    $lon2 = floatval($lon2) * $rad;

    $theta = $lon2 - $lon1;

    $dist = acos(sin($lat1) * sin($lat2) +
        cos($lat1) * cos($lat2) * cos($theta)
    );

    if ($dist < 0 ) {
        $dist += M_PI;
    }

    return $dist = $dist * $radius;
}

//latitude 纬度
//longitude 经度

//香年广场路口
$lat3 = '113.993345';
$lon3 = '22.552604';

//侨城北地铁D出口
$lat4 = '113.99542';
$lon4 = '22.551131';

//大沙河公园南门
$lat5 = '113.968803';
$lon5 = '22.559863';

echo '<br>';
var_dump(getDistance($lon3, $lat3, $lon4, $lat4), getDistance($lon3, $lat3, $lon5, $lat5), getDistance($lon5, $lat5, $lon4, $lat4) );

?>



<script type="text/javascript">
    /*
    * 随机生成一个8-16位字符串的密码
    * 同时包含大小写字母、数字、标点符号
    */
    function randPassword()
    {
        var text=['abcdefghijklmnopqrstuvwxyz','ABCDEFGHIJKLMNOPQRSTUVWXYZ','1234567890','~!@#$%^&*()_+";",./?<>'];
        var rand = function(min, max){return Math.floor(Math.max(min, Math.random() * (max+1)));}
        var len = rand(8, 16); // 长度为8-16
        var pw = '';
        for(i=0; i<text.length; ++i) {
            pw += text[i].charAt(rand(0, text[i].length)) ;
        }
        for(i=0; i<len-4; ++i) {
            var strpos = rand(0, 3);
            pw += text[strpos].charAt(rand(0, text[strpos].length));
        }
//        if(pw.search(/\d+/) == -1){
//            pw += text[2].charAt(rand(0, text[2].length)) ;
//        }
//        if(pw.search(/[a-z]+/) == -1){
//            pw += text[0].charAt(rand(0, text[0].length)) ;
//        }
//        if(pw.search(/[A-Z]+/) == -1){
//            pw += text[1].charAt(rand(0, text[1].length)) ;
//        }
//        if(pw.search(/[^0-9a-zA-Z]+/) == -1){
//            pw += text[3].charAt(rand(0, text[3].length)) ;
//        }

        console.log(pw );
        pw = pw.split('').sort(function(a, b) {
            //用Math.random()函数生成0~1之间的随机数与0.5比较，返回-1或1
            return Math.random()>.5 ? -1 : 1;
        });
        pw = pw.join('');
        console.log(pw );
        return pw;
    }

    /*
    * 随机生成一个8位字符串的密码
    * 同时包含大小写字母、数字、标点符号
    */
    function randPassword8()
    {
        var text=['abcdefghijklmnopqrstuvwxyz','ABCDEFGHIJKLMNOPQRSTUVWXYZ','1234567890','~!@#$%^&*()_+";",./?<>'];
        var rand = function(min, max){return Math.floor(Math.max(min, Math.random() * (max+1)));}
        var pw = [];
        for(i=0; i<4; i++)
        {
            pw.push(text[i].charAt(rand(0, text[i].length)) );
            pw.push(text[i].charAt(rand(0, text[i].length)) );
        }
        pw.sort(function(a, b) {
            return Math.random()>.5 ? -1 : 1;
        });
        return pw.join('');
    }

    randPassword();
    console.log( randPassword8() );

</script>


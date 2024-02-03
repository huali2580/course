<?php

    $addY = $_POST["year"];

    $addM = $_POST["month"];

    $week = array("星期一","星期二","星期三","星期四",

                  "星期五","星期六","星期日");

   //不計時間取出日期參數，時、分、秒皆以 0 表示

   //月=$addM (輸入)、日= 1(第一天)、年= $addY (輸入)

    $number=date('t', mktime(0,0,0,$addM,1,$addY));  //當月的天數  这里 t 应该是个格式化字符串，表示获取月份的天数。't'
    $first =date('w', mktime(0,0,0,$addM,1,$addY));  // 第一天是星期幾 这里 w 应该是个格式化字符串，
    $F=date('F', mktime(0,0,0,$addM,1,$addY));  //當月的英文字母 这里 F 应该是个格式化字符串，

 

    echo "<table width='400' border='1'>";

    echo "<font size='5'>";

    echo $yearYM=$F." ".$addY;

    echo "</font>";

       echo "<tr>";

       for($i=0; $i<7; $i++){

           echo "<td align='center'>$week[$i]</td>";

      }

       echo "</tr>";

       echo "<tr>";

       $now = 0;

    for($i=1; $i<$first; $i++){

           echo "<td>   </td>";

           $now = $now + 1;

    }

       $day = 1;

       while ($day <= $number) {

           echo "<td> $day </td>";

             $now = $now + 1;

           if (($now % 7) == 0){

            echo "</tr>";

                   echo "<tr>";

            $now = 0;

        }

           $day = $day + 1;

    }

    while ($now <7){

        echo "<td>    </td>";

        $now = $now + 1;

    }

    echo "</tr>";

       echo "</table>";

?>
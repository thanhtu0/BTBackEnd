<?php
        //Ví dụ 1
      $string = 'tanhongit.net';
      echo strlen($string);
      //kết quả : 13
?>
<?php
        //Ví dụ 2
      $string = 'tanhongit.net';
      echo strpos($string,'it');
      //kết quả trả về vị trí bắt đầu của chuỗi cần tìm: 7
?>
<?php
        //Ví dụ 3
      $string = 'tanhongit.net welcome';
      var_dump(explode('t',$string)); //nếu không thêm vào giới hạn tách phần tử $limit thì chuỗi sẽ được tách tối đa phần tử
      /*array (size=4)
      0 => string '' (length=0)
      1 => string 'anhongi' (length=7)
      2 => string '.ne' (length=3)
      3 => string ' welcome' (length=8) */

      var_dump(explode('t',$string,2)); //có thêm giới hạn tách chuỗi chỉ gồm 2 phần tử
      /*array (size=2)
      0 => string '' (length=0)
      1 => string 'anhongit.net welcome' (length=20) */
?>
<?php
        //Ví dụ 4
      $array = array('tanhongit.net','welcome','123456');
      var_dump(implode('-', $array)); 
      //kết quả: 'tanhongit.net-welcome-123456'

      var_dump(implode(' ', $array)); 
      //kết quả : 'tanhongit.net welcome 123456'
?>
<?php
        //Ví dụ 5
      $string = 'tanhongit.net welcome';
      var_dump(str_word_count($string));
      /*Kết quả: 3 */
?>
<?php
        //Ví dụ 6
      $string = 'tanhongit.net welcome';
      echo substr($string,0,9) . '<br>'; // output: tanhongit
      echo substr($string,-4) . '<br>'; // output: come
      echo substr($string,-4,3) . '<br>'; // output: com
      echo substr($string,5) . '<br>'; // output: ngit.net welcome
?>
<?php
        //Ví dụ 7
      $string = 'tanhongit.net welcome';
      echo strstr($string,'net') . '<br>'; // output: net welcome
      echo strstr($string,'n') . '<br>'; // output: nhongit.net welcome
      echo strstr($string,'.') . '<br>'; // output: .net welcome
?>
<?php
        //Ví dụ 8
      $string = 'TANHONGIT.NET';
      echo strtolower($string); //output: tanhongit.net
?>
<?php
        //Ví dụ 9
      $string = 'tanhongit.net';
      echo strtoupper($string); //output: TANHONGIT.NET
?>
<?php
        //Ví dụ 10
      $string = '<p><b><i>tanhongit.net</i></b></p>';
      echo strip_tags($string); //output: tanhongit.net
      echo strip_tags($string, '<b>'); //output : <b>tanhongit.net</b>
      echo strip_tags($string, '<i>'); //output : <i>tanhongit.net</i>
?>
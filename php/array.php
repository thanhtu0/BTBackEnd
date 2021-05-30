
<?php
        //Ví dụ 1
   $bien1 = array("tanhongit.net", "php căn bản");
   $bien2 = '';
   var_dump(is_array($bien1)); // Kết quả trả về true 
   var_dump(is_array($bien2)); // Kết quả trả về false
?>
<?php
        //Ví dụ 2
   $bien1 = array("tanhongit.net", "php căn bản");
   var_dump(in_array("tanhongit.net",$bien1)); // Kết quả trả về true 
   var_dump(in_array("hello",$bien1)); // Kết quả trả về false
?>
<?php
        //Ví dụ 3
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456'
    );
    var_dump(array_values($array));
    /* Kêt quả của mảng là array (size=2)
        0 => string 'tanhongit.net' (length=13)
        1 => string '123456' (length=6)
    ) */
?>
<?php
        //Ví dụ 4
    $array = array('tanhongit.net', 'hello', '123456', 'hello');
    var_dump(array_count_values($array));
    /*array (size=3)
    'tanhongit.net' => int 1
    'hello' => int 2  //'hello xuất hiện 2 lần'
    123456 => int 1 */
?>
<?php
        //Ví dụ 5
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456'
    );
    var_dump(array_keys($array));
    /* kết quả : array (size=2)
  0 => string 'username' (length=8)
  1 => string 'password' (length=8)
     */
?>
<?php       
        //Ví dụ 6
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456'
    );
    $array = array_change_key_case($array,1);
    var_dump($array);
    /* kết quả : array (size=2)
  'USERNAME' => string 'tanhongit.net' (length=13)
  'PASSWORD' => string '123456' (length=6)
     */
?>
<?php
        //Ví dụ 7
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456'
    );
    var_dump(array_key_exists("username",$array)); //kết quả var_ dump sẽ trả về true
    var_dump(array_key_exists("hello",$array)); //kết quả var_ dump sẽ trả về false
?>
<?php
        //Ví dụ 8-1
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456'
    );
    var_dump(array_pop($array)); //phần tử cuối cùng sẽ bị cắt mất khỏi mảng
    //kết quả output: '123456' 
    var_dump($array);
    //kết quả màn hình:  array (size=1)
    //'username' => string 'tanhongit.net' (length=13)
?>
<?php
        //Ví dụ 8-2
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456'
    );
    $pop = array_pop($array); //gán giá trị đã bị cắt cuối mảng vào 1 biến
    var_dump($array); // xuất mảng
    echo $pop; // xuất giá trị đã bị cắt khỏi mảng bởi hàm array_pop
?>
<?php
        //Ví dụ 9
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456'
    );
    var_dump(array_push($array,"hello")); 
    //kết quả output: 3
    var_dump($array);
    /*kết quả: array (size=3)
    'username' => string 'tanhongit.net' (length=13)
    'password' => string '123456' (length=6)
    0 => string 'hello' (length=5) */
?>
<?php
        //Ví dụ 10
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456'
    );
    $shift = array_shift($array); //gán giá trị của phần tử đầu tiên trong mảng đã bị cắt vào 1 biến
    var_dump($array);
    /*kết quả màn hình:  array (size=1)
    'password' => string '123456' (length=6)*/
    echo $shift; //giá trị của phần tử đầu tiên trong mảng đã bị cắt đi
?>
<?php
        //Ví dụ 11
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456'
    );
    var_dump(array_unshift($array,"hello")); 
    //kết quả output: 3
    var_dump($array);
    /*kết quả: array (size=3)
  0 => string 'hello' (length=5)
  'username' => string 'tanhongit.net' (length=13)
  'password' => string '123456' (length=6) */
?>
<?php
        //Ví dụ 12
    $array_keys = array('username','password');
    $array_values = array('tanhongit.net','123456');
    
    var_dump(array_combine($array_keys,$array_values)); 
    /*output: array (size=2)
    'username' => string 'tanhongit.net' (length=13)
    'password' => string '123456' (length=6) */
?>
<?php
        //Ví dụ 13
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456',
    );
    $array1 = array(1, 2, 3);
    $array2 = array(
      1 => 'hello',
      'name' => 'Hồng'
    );
    var_dump(array_merge($array,$array1,$array2)); 
    /*kết quả: array (size=7)
    'username' => string 'tanhongit.net' (length=13)
    'password' => string '123456' (length=6)
    0 => int 1
    1 => int 2
    2 => int 3
    3 => string 'hello' (length=5)
    'name' => string 'Hồng' (length=4) */
?>
<?php
        //Ví dụ 14
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456',
    );
    $array1 = array(1, 2, 3);
    $array2 = array(
      1 => 'hello',
      'name' => 'Hồng'
    );
    echo array_rand(array_merge($array,$array1,$array2));  //lấy 1 phần tử ngẫu nhiên trong mảng kết hợp
    //kêt quả lệnh echo: password

    var_dump(array_rand(array_merge($array,$array1,$array2), 3)); //lấy 3 phần tử ngẫu nhiên trong mảng kết hợp
    /*kết quả: array (size=3)
    0 => string 'password' (length=8)
    1 => int 2
    2 => int 3 */
?>
<?php   
        //Ví dụ 15
    $array = array('tanhongit.net', 'hello', '123456', 'hello');
    var_dump(array_unique($array));
    /*array (size=3)
    0 => string 'tanhongit.net' (length=13)
    1 => string 'hello' (length=5)
    2 => string '123456' (length=6) */
?>
<?php
        //Ví dụ 16
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456'
    );
    var_dump(array_flip($array)); 
    /*kết quả: array (size=2)
  'tanhongit.net' => string 'username' (length=8)
  123456 => string 'password' (length=8) */
?>
<?php
        //Ví dụ 17
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456',
    );
    var_dump(array_reverse($array)); 
    /*kết quả: array (size=2)
  'password' => string '123456' (length=6)
  'username' => string 'tanhongit.net' (length=13) */
?>
<?php
        //Ví dụ 18
    $array = array(
    'username' => 'tanhongit.net',
    'password' => '123456',
    );
    var_dump(array_search('tanhongit.net',$array)); 
    /*kết quả: string 'username' (length=8) */
?>
<?php
        //Ví dụ 19
      $array = array(
      'username' => 'tanhongit.net',
      'password' => '123456',
      );
      var_dump(array_slice($array, 0)); //lấy ra các phần tử bắt đầu từ chỉ mục $key = 0
      /*kết quả: array (size=2)
      'username' => string 'tanhongit.net' (length=13)
      'password' => string '123456' (length=6) */
      var_dump(array_slice($array, 0 , 1)); //lấy ra 1 phần tử bắt đầu từ chỉ mục $key = 0
      /*Kết quả: array (size=1)
      'username' => string 'tanhongit.net' (length=13) */
      var_dump(array_slice($array, 1 , 1)); //lấy ra 1 phần tử bắt đầu từ chỉ mục $key = 1
      /*Kết quả: array (size=1)
      'password' => string '123456' (length=6) */ 
?>
<!DOCTYPE html>
<html lang="en">-

<body>
    <?php
    // $animals = array("Cat", "dog", "fish");
    
    // echo count($animals);
    
    // foreach ($animals as $x) {
    //     echo "$x ";
    //   }
    
    // array_push($animals, "bird");
    // print_r($animals);
    
    // unset($animals[0], $animals[2]);
    // print_r($animals);
    
    // $number = array(5, 6, 3, 1, 2);
    

    // sort($number);
    // print_r($number);
    
    // rsort($number);
    // print_r($number);
    
    // $score = array("a" => "5", "C" => "7", "b" => "6");
    
    // asort($score);
    // print_r($score);
    

    // ksort($score);
    // print_r($score);
    

    // arsort($score);
    // print_r($score);
    

    // krsort($score);
    // print_r($score);
    

    // print_r(array_change_key_case($score,CASE_UPPER));
    

    // print_r(array_change_key_case($score, CASE_LOWER));
    

    // print_r(array_chunk($animals,2));
    
    // $a = array(
    //     array(
    //         'id' => 01,
    //         'name' => 'Nguyen',
    //         'score' => '10',
    //     ),
    //     array(
    //         'id' => 02,
    //         'name' => 'Nam',
    //         'score' => '9',
    //     ),
    //     array(
    //         'id' => 03,
    //         'name' => 'Hoang',
    //         'score' => '10',
    //     )
    // );
    // $last_names = array_column($a, 'name');
    // print_r($last_names);
    

    // $name = array("Nguyen", "Nam", "Hoang");
    // $score = array("10", "9", "10");
    // $c = array_combine($name, $score);
    // print_r($c);
    

    // $a = array("A", "Cat", "Dog", "A", "Dog");
    // print_r(array_count_values($a));
    

    // $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    // $a2 = array("e" => "red", "f" => "black", "g" => "purple");
    // $a3 = array("a" => "red", "b" => "black", "h" => "yellow");
    // $result = array_diff($a1, $a2, $a3);
    // print_r($result);
    

    // $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    // $a2 = array("a" => "red", "b" => "green", "c" => "blue");
    // $result = array_diff_assoc($a1, $a2);
    // print_r($result);
    

    // $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    // $a2 = array("a" => "red", "c" => "blue", "d" => "pink");
    // $result = array_diff_key($a1, $a2);
    // print_r($result);
    

    // function myfunction($a, $b)
    // {
    //     if ($a === $b) {
    //         return 0;
    //     }
    //     return ($a > $b);
    // }
    // $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    // $a2 = array("a" => "red", "b" => "green", "d" => "blue");
    // $a3 = array("e" => "yellow", "a" => "red", "d" => "blue");
    // $result = array_diff_uassoc($a1, $a2, $a3, "myfunction");
    // print_r($result);
    

    // function myfunction($a, $b)
    // {
    //     if ($a === $b) {
    //         return 0;
    //     }
    //     return ($a > $b) ? 1 : -1;
    // }
    // $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    // $a2 = array("a" => "black", "b" => "yellow", "d" => "brown");
    // $a3 = array("e" => "purple", "f" => "white", "a" => "gold");
    // $result = array_diff_ukey($a1, $a2, $a3, "myfunction");
    // print_r($result);
    

    // $a1 = array_fill(3, 4, "blue");
    // print_r($a1);
    

    // $keys = array("a", "b", "c", "d");
    // $a1 = array_fill_keys($keys, "blue");
    // print_r($a1);
    

    // function test_odd($var)
    // {
    //     return ($var & 1);
    // }
    // $a1 = array(1, 3, 2, 3, 4);
    // print_r(array_filter($a1, "test_odd"));
    

    // $a = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

    // function flip_Array($a){
    //     $result = [];
    
    //     foreach ($a as $key => $value){
    //         $result[$value] = $key;
    //     }
        
    //     print_r($result);
    // }
    
    // flip_Array($a); 
    

    // $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    // $a2 = array("e" => "red", "f" => "green", "g" => "blue");
    // $result = array_intersect($a1, $a2);
    // print_r($result);
    

    // $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    // $a2 = array("a" => "red", "b" => "green", "g" => "blue");
    // $a3 = array("a" => "red", "b" => "green", "g" => "blue");
    
    // $result = array_intersect_assoc($a1, $a2, $a3);
    // print_r($result);
    

    // $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    // $a2 = array("c" => "yellow", "d" => "black", "e" => "brown");
    // $a3 = array("f" => "green", "c" => "purple", "g" => "red");
    
    // $result = array_intersect_key($a1, $a2, $a3);
    // print_r($result);
    

    // function myfunction($a, $b)
    // {
    //     if ($a === $b) {
    //         return 0;
    //     }
    //     return ($a > $b) ? 1 : -1;
    // }
    
    // $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    // $a2 = array("d" => "red", "b" => "green", "e" => "blue");
    
    // $result = array_intersect_uassoc($a1, $a2, "myfunction");
    // print_r($result);
    

    // function myfunction($a, $b)
    // {
    //     if ($a === $b) {
    //         return 0;
    //     }
    //     return ($a > $b) ? 1 : -1;
    // }
    
    // $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    // $a2 = array("a" => "black", "b" => "yellow", "d" => "brown");
    // $a3 = array("e" => "purple", "f" => "white", "a" => "gold");
    
    // $result = array_intersect_ukey($a1, $a2, $a3, "myfunction");
    // print_r($result);
    

    // $a = array("Volvo" => "XC90", "BMW" => "X5");
    // if (array_key_exists("Toyota", $a)) {
    //     echo "Key exists!";
    // } else {
    //     echo "Key does not exist!";
    // }
    

    // $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
    // print_r(array_keys($a));
    

    // function myfunction($v)
    // {
    //     return ($v * $v);
    // }
    
    // $a = array(1, 2, 3, 4, 5);
    // print_r(array_map("myfunction", $a));
    

    // $a1 = array("a" => "red", "b" => "green");
    // $a2 = array("c" => "blue", "b" => "yellow");
    // print_r(array_merge_recursive($a1, $a2));
    

    // $a = array("Dog", "Cat", "Horse", "Bear", "Zebra");
    // array_multisort($a);
    // print_r($a);
    

    // $a = array("red", "green");
    // print_r(array_pad($a, 5, "blue"));
    

    // $a = array("red", "green", "blue");
    // array_pop($a);
    // print_r($a);
    

    // $a = array(5, 5);
    // echo (array_product($a));
    

    // $a = array("red", "green");
    // array_push($a, "blue", "yellow");
    // print_r($a);
    

    // $a = array("red", "green", "blue", "yellow", "brown");
    // $random_keys = array_rand($a, 3);
    // echo $a[$random_keys[0]] . "<br>";
    // echo $a[$random_keys[1]] . "<br>";
    // echo $a[$random_keys[2]];
    

    // function myfunction($v1, $v2)
    // {
    //     return $v1 . "-" . $v2;
    // }
    // $a = array("Dog", "Cat", "Horse");
    // print_r(array_reduce($a, "myfunction", 5));
    

    // $a1 = array("red", "green");
    // $a2 = array("blue", "yellow");
    // print_r(array_replace($a1, $a2));
    

    // $a1 = array("a" => array("red"), "b" => array("green", "blue"), );
    // $a2 = array("a" => array("yellow"), "b" => array("black"));
    // print_r(array_replace_recursive($a1, $a2));


//     $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
// print_r(array_reverse($a));


// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_search("red",$a);


// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_shift($a);
// print_r ($a);


// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,2));


// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"purple","b"=>"orange");
// array_splice($a1,0,2,$a2);
// print_r($a1);


// $a=array(5,15,25);
// echo array_sum($a);


// function myfunction($a,$b)
// {
// if ($a===$b)
//   {
//   return 0;
//   }
//   return ($a>$b)?1:-1;
// }

// $a1=array("a"=>"red","b"=>"green","c"=>"blue");
// $a2=array("a"=>"blue","b"=>"black","e"=>"blue");

// $result=array_udiff($a1,$a2,"myfunction");
// print_r($result);


// function myfunction($a,$b)
// {
// if ($a===$b)
//   {
//   return 0;
//   }
//   return ($a>$b)?1:-1;
// }

// $a1=array("a"=>"red","b"=>"green","c"=>"blue");
// $a2=array("a"=>"red","b"=>"blue","c"=>"green");

// $result=array_udiff_assoc($a1,$a2,"myfunction");
// print_r($result);


// function myfunction_key($a,$b)
// {
// if ($a===$b)
//   {
//   return 0;
//   }
//   return ($a>$b)?1:-1;
// }

// function myfunction_value($a,$b)
// {
// if ($a===$b)
//   {
//   return 0;
//   }
//   return ($a>$b)?1:-1;
// }

// $a1=array("a"=>"red","b"=>"green","c"=>"blue");
// $a2=array("a"=>"red","b"=>"green","c"=>"green");

// $result=array_udiff_uassoc($a1,$a2,"myfunction_value","myfunction_key");
// print_r($result);


// function myfunction($a,$b)
// {
// if ($a===$b)
//   {
//   return 0;
//   }
//   return ($a>$b)?1:-1;
// }

// $a1=array("a"=>"red","b"=>"green","c"=>"blue");
// $a2=array("a"=>"blue","b"=>"black","e"=>"blue");

// $result=array_uintersect($a1,$a2,"myfunction");
// print_r($result);


// function myfunction($a,$b)
// {
// if ($a===$b)
//   {
//   return 0;
//   }
//   return ($a>$b)?1:-1;
// }

// $a1=array("a"=>"red","b"=>"green","c"=>"blue");
// $a2=array("a"=>"red","b"=>"blue","c"=>"green");

// $result=array_uintersect_assoc($a1,$a2,"myfunction");
// print_r($result);


// function myfunction_value($a,$b) {
//     if ($a===$b) {
//       return 0;
//     }
//     return ($a>$b)?1:-1;
//   }
  
//   function myfunction_key($a,$b) {
//     if ($a===$b) {
//       return 0;
//     }
//     return ($a>$b)?1:-1;
//   }
  
//   $a1=array("a"=>"red","b"=>"green","c"=>"blue");
//   $a2=array("a"=>"red","b"=>"green","c"=>"green");
  
//   $result=array_uintersect_uassoc($a1,$a2,"myfunction_value","myfunction_key");
//   print_r($result);


//  $a=array("a"=>"red","b"=>"green","c"=>"red");

//  function arrayUnique($a) {
//     $result = [];
//     $uniqueValues = []; 
    
//     foreach ($a as $value) {
//         $isUnique = true;
//         foreach ($uniqueValues as $uniqueValue) {
//             if ($value == $uniqueValue) {
//                 $isUnique = false;
//                 break;
//             }
//         }
        
//         if ($isUnique) {
//             $result[] = $value;
//             $uniqueValues[] = $value; 
//         }
//     }
    
//     print_r( $result);
// }

// arrayUnique($a);


// $a=array("a"=>"red","b"=>"green");
// array_unshift($a,"blue");
// print_r($a);


// $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
// print_r(array_values($a));


// function myfunction($value,$key)
// {
// echo "The key $key has the value $value<br>";
// }
// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// array_walk($a,"myfunction");


// function myfunction($value,$key)
// {
// echo "The key $key has the value $value<br>";
// }
// $a1=array("a"=>"red","b"=>"green");
// $a2=array($a1,"1"=>"blue","2"=>"yellow");
// array_walk_recursive($a2,"myfunction");


// $firstname = "Peter";
// $lastname = "Griffin";
// $age = "41";

// $result = compact("firstname", "lastname", "age");

// print_r($result);


// $people = array("Peter", "Joe", "Glenn", "Cleveland");

// echo current($people) . "<br>";


// $people = array("Peter", "Joe", "Glenn", "Cleveland");
// echo current($people) . "<br>";
// echo end($people);


// $a = "Original";
// $my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
// extract($my_array);
// echo "\$a = $a; \$b = $b; \$c = $c";


// $people = array("Peter", "Joe", "Glenn", "Cleveland");

// if (in_array("Glenn", $people))
//   {
//   echo "Match found";
//   }
// else
//   {
//   echo "Match not found";
//   }


// $people=array("Peter","Joe","Glenn","Cleveland");
// echo "The key from the current position is: " . key($people);


// $my_array = array("Dog","Cat","Horse");

// list($a, $b, $c) = $my_array;
// echo "I have several animals, a $a, a $b and a $c.";


// $temp_files = array("temp15.txt","Temp10.txt",
// "temp1.txt","Temp22.txt","temp2.txt");

// natsort($temp_files);
// echo "Natural order: ";
// print_r($temp_files);
// echo "<br />";

// natcasesort($temp_files);
// echo "Natural order case insensitve: ";
// print_r($temp_files);


// $temp_files = array("temp15.txt","temp10.txt",
// "temp1.txt","temp22.txt","temp2.txt");

// sort($temp_files);
// echo "Standard sorting: ";
// print_r($temp_files);
// echo "<br>";

// natsort($temp_files);
// echo "Natural order: ";
// print_r($temp_files);


// $people = array("Peter", "Joe", "Glenn", "Cleveland");

// echo current($people) . "<br>";
// echo next($people);


// $people = array("Peter", "Joe", "Glenn", "Cleveland");

// echo pos($people) . "<br>";


// $people = array("Peter", "Joe", "Glenn", "Cleveland");

// echo current($people) . "<br>";
// echo next($people) . "<br>";
// echo prev($people);


// $number = range(0,5);
// print_r ($number);


// $people = array("Peter", "Joe", "Glenn", "Cleveland");

// echo current($people) . "<br>";
// echo next($people) . "<br>";

// echo reset($people);


// $cars=array("Volvo","BMW","Toyota");
// rsort($cars);

// $clength=count($cars);
// for($x=0;$x<$clength;$x++)
//   {
//   echo $cars[$x];
//   echo "<br>";
//   }


// $my_array = array("red","green","blue","yellow","purple");

// shuffle($my_array);
// print_r($my_array);


// $cars=array("Volvo","BMW","Toyota");
// echo sizeof($cars);


// $cars = array("Volvo", "BMW", "Toyota");
// sort($cars);

// foreach ($cars as $key => $val) {
//     echo "cars[" . $key . "] = " . $val . "<br>";
// }


// function my_sort($a, $b) {
//     if ($a == $b) return 0;
//     return ($a < $b) ? -1 : 1;
//   }
  
//   $arr = array("a"=>4, "b"=>2, "c"=>8, "d"=>6);
//   uasort($arr, "my_sort");
  
//   foreach($arr as $key => $value) {
//     echo "[" . $key . "] => " . $value;
//     echo "<br>";
//   }


// function my_sort($a, $b) {
//     if ($a == $b) return 0;
//     return ($a < $b) ? -1 : 1;
//   }
  
//   $arr = array("a"=>4, "b"=>2, "c"=>8, "d"=>6);
//   uksort($arr, "my_sort");
  
//   foreach($arr as $key => $value) {
//     echo "[" . $key . "] => " . $value;
//     echo "<br>";
//   }


// function my_sort($a, $b) {
//     if ($a == $b) return 0;
//     return ($a < $b) ? -1 : 1;
//   }
  
//   $a = array(4, 2, 8, 6);
//   usort($a, "my_sort");
  
//   foreach($a as $key => $value) {
//     echo "[" . $key . "] => " . $value;
//     echo "<br>";
//   }


    // echo(array_search(7, $score));
    

    // print_r(in_array(4, $score));


    // $arr = [1, 2, 3, 4, 5];
    // print_r (next($arr));
    // print_r (prev($arr));
    // print_r (next($arr));
    // print_r (next($arr));
    // print_r (next($arr));
    // print_r (reset($arr))
    ?>
</body>

</html>
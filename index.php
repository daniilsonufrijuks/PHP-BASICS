<!DOCTYPE html>
<html>
    <body>
        <?php
            # Hello World uzd 1
            echo "Hello World!<br>";
        ?>

        <?php
            # Data and Time uzd 2        
            echo "Today is " . date("Y.m.d") . "<br>";
        ?>

        <?php
            # Variables uzd 3
            $x = 5;
            $y = 10.5;
            $sum = $x + $y;
            echo "Summa ".$sum . "<br>";
        ?>

        <?php
            # Even or odd uzd 4
            $num = 2;
            if ($num % 2 == 0) {
                echo "Even <br>";
            } else {
                echo "Odd <br>";
            }
        ?>

        <?php
            # Max un min in array uzd 5
            $nums = array(0, -1, 9);
            $min = $nums[0];
            foreach ($nums as $num) {             
                if ($min > $num) {
                    $min = $num;
                }
            }
            echo "Min number in array ". $min ."<br>";

            $nums1 = array(0, -1, 9);
            $max = $nums1[0];
            foreach ($nums1 as $num) {             
                if ($max < $num) {
                    $max = $num;
                }
            }
            echo "Max number in array ". $max ."<br>";
        ?>
        
        <?php
            # String reverse uzd 6
            $str = "ABC";
            echo "String reverse ". strrev($str) . "<br>";
        ?>

        <?php
            # String palindrom? uzd 7
            $str = "ABA";
            $reversedStr = strrev($str);

            if ($str == $reversedStr) {
                echo "The string is a palindrome <br>";
            } else {
                echo "The string is not a palindrome <br>";
            }
        ?>

        <?php
            # Random number uzd 8
            echo "Rnd number: " .(rand(1,10)). "<br>";
        ?>

        <?php
            # Uppaer case str uzd 9
            $str = "abc";
            echo "String in upper case ".strtoupper($str). "<br>";
        ?>

        <?php
            # Words in (counter) sentence uzd 10
            $str = "Hello World";
            $cnt = str_word_count($str);
            echo "Words in string: ". $cnt ."<br>";
        ?>
    </body>
</html>
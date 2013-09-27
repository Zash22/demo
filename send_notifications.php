<?php

require_once ("Database.php");
Database::db();

date_default_timezone_set("Africa/Johannesburg");

$sql = "select * from `cproduct` where `upname` like '%.co.za' ";
$sqlquery = mysql_query($sql);
    if (!$sqlquery)
        {
            die("Database query failed: " . mysql_error());
        }



//$signupdate = date("Y-m-d", strtotime($row2["sdate"]));
//while ($row2 = mysql_fetch_array ($result2))


//To display the result
while ($row2 = mysql_fetch_array ($sqlquery))
        {
            $current_date = date('d-m-Y');
            $signupdate = date("d-m-Y", strtotime($row2["sdate"]));

//var_dump($signupdate);
            $renewal_date =  date('d-m-Y',strtotime("+365 days $signupdate"));

            $diff_num= strtotime( ( ($current_date) - $renewal_date));
            $diff = date('d-m-y',$diff_num);

	   // $diff = abs(date("Y-m-d")) - date("Y-m-d" ,strtotime("+12 months", $signupdate));

            echo "Product name: " . $row2["upname"] . "<br />";
            echo "Signup date: " . $signupdate . "<br />";
            echo "Current date" . $current_date . "<br />";
            //echo "Current date num " . strtotime($current_date) . "<br />";
            echo "Renewal date" . $renewal_date. "<br />";
            //echo "Renewal date num " . "'strtotime'($renewal_date2)" . "<br />";
            //echo "Diff num: " . $diff_num . "<br />";
            echo "diff: " . $diff . "<br />";
            //echo "diff string: " . "strtotime($diff)" . "<br />";
            echo "<br />";
            //echo strtotime("0000-24-00");
            //echo "str: curr " . strtotime("2013-04-16");

        // $renewal_date = date ("Y-m-d", strtotime("+12 months $renewal_date"));
         //   $renewal_date = date ("Y-m-d", strtotime("+12 months $signupdate"));
        }

            /*do
                {
                    //$renewal_date = date ("Y-m-d", strtotime("+12 months $signupdate"));
                 //   $renewal_date .= date("Y-m-d", strtotime("+12 months $renewal_date"));
                //    echo $renewal_date;
                }
                while($renewal_date <= $current_date);/*

            echo "Product name: " . $row2["upname"] . "<br />";
            echo "Signup date: " . $signupdate . "<br />";
            echo "Current date" . $current_date . "<br />";
            echo "Renewal date" . $renewal_date . "<br />";
            echo "<br />";
        }



if (!$row2 = mysql_fetch_array($sqlquery))
    {
        die("failed : " . mysql_error());
    }
/*$date = date("Y-m-d") ;

echo $date;*/





?>

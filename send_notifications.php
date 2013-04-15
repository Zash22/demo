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
            $current_date = date("Y-m-d");
            $signupdate = date("Y-m-d", strtotime($row2["sdate"]));
var_dump($signupdate);
            $renewal_date =  date("Y-m-d",strtotime("+12 months", $signupdate));

            //$diff = abs(date("Y-m-d")) - date("Y-m-d" ,strtotime("+12 months $signupdate"));
	    $diff = abs(date("Y-m-d")) - date("Y-m-d" ,strtotime("+12 months", $signupdate));

            echo "Product name: " . $row2["upname"] . "<br />";
            echo "Signup date: " . $signupdate . "<br />";
            echo "Current date" . $current_date . "<br />";
            echo "Renewal date" . $renewal_date . "<br />";
            echo "diff: " . $diff . "<br />";

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

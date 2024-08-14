<?php
include("db.php");

$query="select * from studentrecord";

$data=mysqli_query($db,$query);

$total=mysqli_num_rows($data);


    if($total!=0)
    {


        ?>
            <center><table border="3" cellspacing="7">
                <tr>
                    <th>id</th>
                    <th>student Name</th>
                    <th>Student Address</th>
                    <th>Student Phone</th>

                    <th colspan="2">Operation</th>
                </tr>


        <?php

        while($result=mysqli_fetch_assoc($data))
        {
                echo"<tr>
                        <td>".$result['id']."</td>
                        <td>".$result['stname']."</td>
                        <td>".$result['staddresss']."</td>
                        <td>".$result['stphone']."</td>
                        
                        <td> <a href=update.php?id="."<? echo $result[id]; ?>".">Edit</a></td>
                       

                    </tr>";
        }
    }
    else
    {
         echo "data not found";
    }
?>
</table>
            </center>  
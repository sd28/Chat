<?php
        include 'db.php';


        $query="Select * from chat ";
        $run= $con->query($query);
        while($row=$run->fetch_array()):
        
        
        ?>
        
        <div id="chat_data">
        <span style="color:blue"><?php echo $row['name'];?>: </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span style="color:brown"><?php echo $row['msg'];?></span>
        <span style="float:right"> <?php echo $row['date'];?></span>
                </div>
        <?php endwhile ?>
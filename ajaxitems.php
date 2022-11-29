<?php

ob_start();
include 'db.php';
?>

<select id="items" class="form-control" name="items[]" multiple="">
                
                <?php
                $q3=$_GET['q'];
                $qr1="select distinct Name from items where Category='$q3'";
                $qr2=  mysqli_query($con, $qr1);
                while ($r2=  mysqli_fetch_array($qr2))
                {
                ?>
                <option value="<?php echo $r2['Name'];?>"><?php echo $r2['Name'];?></option>
                <?php
                }
                ?>
            </select>
       
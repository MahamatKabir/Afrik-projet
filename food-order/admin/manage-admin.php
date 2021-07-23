<?php include 'partial/menu.php'; ?>
        <!-- main content section start-->
        <div class="main-content">
        <div class="wrapper">
                <h1>Manage Admin</h1>
                <br/><br/>
                <?php
                if(isset($_SESSION['add'])){
                    echo  $_SESSION['add'];//display session variable
                    unset($_SESSION['add']);//removing session
                }
                ?>
                <br/><br/>

                <a href="add-admin.php" class="btn-primary">Add Admin </a>
                <br/><br/></br>
                <table class="tbl-full">
                    <tr>
                        <th>S.N</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                    
                    <?php 
                    //cette partie nous permet de recuperer les informatiom stocker au niveau de notre base de donneé

                    $sql = "SELECT * FROM tbl_admin";

                    $res = mysqli_query($conn,$sql);

                    if($res==TRUE)
                    {
                        $count = mysqli_num_rows($res);
                        $sn= 1; //va nous permettre d ordoner les nombres

                        if($count>0)
                        {
                            while($rows = mysqli_fetch_assoc($res))
                            {
                                $id = $rows['id'];
                                $full_name = $rows['full_name'];
                                $usename = $rows['usename'];

                                ?>
                                <tr>
                                    <td><?php echo  $sn++ ; ?></td>
                                    <td><?php echo $full_name; ?></td>
                                    <td><?php echo $usename; ?></td>
                                    <td>
                                         <a href="#" class="btn-secondary">update Admin</a>
                                         <a href="#" class="btn-danger">Delete Admin</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else
                        {
                                 //we do no have data in database
                        }
                    }
                    ?>
                    
                   
                </table>
            </div>
        </div>
        <!-- main content section end-->
<?php include 'partial/footer.php'; ?>  
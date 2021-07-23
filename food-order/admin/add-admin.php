<?php include ('partial/menu.php');?>
<div class="main-content">
    <div class="wrapper">
        <h1> Add Admin </h1>
        <br/><br/>
        <form  action=""  method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name="full_name" placeholder="entrer votre nom">
                    </td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="usename" placeholder="votre nom dutilisateur">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="mot de passe">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include ('partial/footer.php');?>

<?php 
// enregistrement  au niveau de notre data

if(isset($_POST['submit'])){
    //si le button a ete cliquer
    $full_name = $_POST['full_name'];
    $usename = $_POST['usename'];
    $password = ($_POST['password']);// md5 permet de crypter notre mot de passe

    //2.sql query to save the data into database

    $sql = "INSERT INTO tbl_admin SET 
          full_name='$full_name',
          usename='$usename',
          password='$password'
          ";

          $res = mysqli_query($conn, $sql) or die(mysqli_error());

          /*partie tres important qui nous permet d inserer nos donneés dans le base de donneé
          $conn = mysql_connect('localhost', 'root' , '') or die(mysqli_error());
          $db_select = mysqli_select_db($conn,'food-order') or die(mysqli_error());*/
          if($res==TRUE){
              //echo 'data inserted';
              $_SESSION['add'] = "Admin added Successfully";

              header("Location:".SITEURL.'admin/manage-admin.php');
          }
          else{
              //echo 'data failed';
              $_SESSION['add'] = "Admin failed";

              header("Location:".SITEURL.'admin/add-admin.php');
          }
}
?>
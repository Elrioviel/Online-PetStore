<link rel="stylesheet" href="css\formstyle.css">
<form action="" method="post" class="input-form" enctype="multipart/form-data">
    <?php
    include('../includes/connect.php');
    if(isset($_POST['insert-animal']))
    {
        $animal_name=$_POST['an_name'];
        //verify for duplicates
        $select_query="Select * from `animals` where Animal_Name='$animal_name'";
        $result_select=mysqli_query($con, $select_query);
        $number=mysqli_num_rows($result_select);
        if($number>0)
        {
            echo "<script>alert('This animal already exists in database')</script>";
        }
        //insert the animal into db
        else
        {
            $insert_query="INSERT INTO `animals` (Animal_Name) VALUES('$animal_name')";
            $result_insert=mysqli_query($con, $insert_query);
            if($result_insert)
            {
                echo "<script>alert ('Animal has been successfully inserted')</script>";
            }
        }
    }
    ?>
    <h2>Добавить животное</h2>
    <div class="input-group">
        <input type="text" class="form-control" name="an_name" placeholder="Животное" required="required">
        <div class="input-group-append">
            <input type="submit" class="category-btn" value="Добавить" name="insert-animal">
        </div>
    </div>
</form>
<link rel="stylesheet" href="css\formstyle.css">
<form action="" method="post" class="input-form" enctype="multipart/form-data">
    <?php
    include('../includes/connect.php');
    if(isset($_POST['insert-brand']))
    {
        $brands_name=$_POST['brand_name'];
        $brand_image=$_FILES['brand_image']['name'];
        $temp_image=$_FILES['brand_image']['tmp_name'];
        //verify for duplicates
        $select_query="Select * from `brands` where Brand_Name='$brands_name'";
        $result_select=mysqli_query($con, $select_query);
        $number=mysqli_num_rows($result_select);
        if($number>0)
        {
            echo "<script>alert('This brand already exists in the database')</script>";
        }
        //insert the brand into db
        else
        {
            $insert_query="INSERT INTO `brands` (Brand_Name, Brand_Picture) VALUES ('$brands_name','$brand_image')";
            $result_insert=mysqli_query($con, $insert_query);
            move_uploaded_file($temp_image, "../temp-img/Brands/$brand_image");
            if($result_insert)
            {
                echo "<script>alert('Brand has been successfully inserted')</script>";
            }
        }
    }
    ?>
    <h2>Добавить производителя</h2>
    <div class="input-group">
        <input type="text" class="form-control" name="brand_name" placeholder="Название производителя" required="required">
        <div class="brand-browse">
            <input type="file" name="brand_image" id="brand_image" class="form-control" required="required">
        </div>
        <div class="input-group-append">
            <!--<button class="brand-btn" type="submit">Добавить</button>-->
            <input type="submit" class="category-btn" name="insert-brand" value="Добавить">
        </div>
    </div>
</form>
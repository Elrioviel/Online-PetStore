
<link rel="stylesheet" href="css\formstyle.css">
<form action="" method="post" class="input-form" enctype="multipart/form-data">
    <?php
    include('../includes/connect.php');
    if(isset($_POST['insert-categ']))
    {
        $category_name=$_POST['categ_name'];
        $categ_image=$_FILES['categ_image']['name'];
        $temp_image=$_FILES['categ_image']['tmp_name'];
        //verify for duplicates
        $select_query="Select * from `categories` where Category_Name='$category_name'";
        $result_select=mysqli_query($con, $select_query);
        $number=mysqli_num_rows($result_select);
        if($number>0)
        {
            echo "<script>alert('This category is already inserted into the database')</script>";
        }
        //insert the category into db
        else
        {
            $insert_query="INSERT INTO `categories` (Category_Name, Category_Picture) VALUES ('$category_name','$categ_image')";
            $result_insert=mysqli_query($con, $insert_query);
            move_uploaded_file($temp_image, "../temp-img/Categories/$categ_image");
            if($result_insert)
            {
                echo "<Script>alert('Category has been successfully inserted')</script>";
            }
        }
    }
    ?>
    <h2>Добавить категорию</h2>
    <div class="input-group">
        <input type="text" class="form-control" name="categ_name" placeholder="Название категории" required="required">
        <div class="category-browse">
            <input type="file" name="categ_image" id="categ_image" class="form-control" required="required">
        </div>
        <div class="input-group-append">
            <!--<button class="category-btn" type="submit">Добавить</button>-->
            <input type="submit" class="category-btn" name="insert-categ" value="Добавить">
        </div>
    </div>
</form>
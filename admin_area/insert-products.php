<link rel="stylesheet" href="css\formstyle.css">
<link rel="stylesheet" href="css\productstyle.css">
<form action="" method="post" enctype="multipart/form-data">
    <?php
    include('../includes/connect.php');
    if(isset($_POST['insert-produc']))
    {
        $product_title=$_POST['product-title'];
        $product_description=$_POST['product-description'];
        $product_keywords=$_POST['product-keywords'];
        $product_price=$_POST['product-price'];
        $product_inStock=$_POST['product-inStock'];
        $product_category=$_POST['product-category'];
        $product_brand=$_POST['product-brand'];
        $product_animal=$_POST['product-animal'];
        $product_first_image=$_FILES['product_first_image']['name'];
        $temp_first_image=$_FILES['product_first_image']['tmp_name'];
        $product_second_image=$_FILES['product_second_image']['name'];
        $temp_second_image=$_FILES['product_second_image']['tmp_name'];

        //check if empty
        if($product_title=='' or $product_description=='' or $product_keywords==''
        or $product_price=='' or $product_inStock=='' or $product_category==''
        or $product_brand=='' or $product_animal=='' or $product_first_image==''
        or $product_second_image=='')
        {
            echo "<script>alert('Please fill the required fields!')</script>";
            exit();
        }
        else
        {
            move_uploaded_file($temp_first_image, "../temp-img/Products/$product_first_image");
            move_uploaded_file($temp_second_image, "../temp-img/Products/$product_second_image");
            $insert_products="INSERT INTO `products` (Product_Title, Product_Description,
            Product_Keywords, Product_Price, Product_inStock, Product_Image1, Product_Image2,
            Category_ID, Brand_ID, Animal_ID) values ('$product_title','$product_description','$product_keywords',
            '$product_price','$product_inStock','$product_first_image','$product_second_image','$product_category',
            '$product_brand','$product_animal')";
            $result_query=mysqli_query($con, $insert_products);
            if($result_query)
            {
                echo "<script>alert('Product added to database!')</script>"; 
            }
        }
    }
    ?>
    <h2  class="input-form">Добавить товар</h2>
    <div class="product-form">
        <!--product title-->
        <div class="element-container">
            <label for="product-title" class="form-label">Название товара:</label>
            <input type="text" name="product-title" id="product-title" class="form-control"
            placeholder="Введите название товара" autocomplete="off" required="required">
        </div>
        <!--product description-->
        <div class="element-container">
            <label for="product-description" class="form-label">Описание товара:</label>
            <input type="text" name="product-description" id="product-description" class="form-control"
            placeholder="Введите описание товара" autocomplete="off" required="required">
        </div>
        <!--product keywords-->
        <div class="element-container">
            <label for="product-keywords" class="form-label">Ключевые слова:</label>
            <input type="text" name="product-keywords" id="product-keywords" class="form-control"
            placeholder="Введите ключевые слова товара" autocomplete="off" required="required">
        </div>
        <!--product price-->
        <div class="element-container">
            <label for="product-price" class="form-label">Цена товара:</label>
            <input type="text" name="product-price" id="product-price" class="form-control"
            placeholder="Введите стоимость товара" autocomplete="off" required="required">
        </div>
        <!--products in stock-->
        <div class="element-container">
            <label for="product-inStock" class="form-label">В наличии:</label>
            <input type="text" name="product-inStock" id="product-inStock" class="form-control"
            placeholder="Введите количество товаров в наличии" autocomplete="off" required="required">
        </div>
        <!--product category-->
        <div class="element-container">
            <select name="product-category" id="" class="form-select">
                <option value="">Выберите категорию</option>
                <?php
                $select_query="Select * from `categories`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query))
                {
                    $category_title=$row['Category_Name'];
                    $category_id=$row['Category_ID'];
                    echo "<option value='$category_id'>$category_title</option>";
                }
                ?>
            </select>
        </div>
        <!--product brand-->
        <div class="element-container">
            <select name="product-brand" id="" class="form-select">
                <option value="">Выберите бренд</option>
                <?php
                $select_query="Select * from `brands`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query))
                {
                    $brand_title=$row['Brand_Name'];
                    $brand_id=$row['Brand_ID'];
                    echo "<option value='$brand_id'>$brand_title</option>";
                }
                ?>
            </select>
        </div>
        <!--product animal-->
        <div class="element-container">
            <select name="product-animal" id="" class="form-select">
                <option value="">Выберите животное</option>
                <?php
                $select_query="Select * from `animals`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query))
                {
                    $animal_name=$row['Animal_Name'];
                    $animal_id=$row['Animal_ID'];
                    echo "<option value='$animal_id'>$animal_name</option>";
                }
                ?>
            </select>
        </div>
        <!--product image1-->
        <div class="element-container">
            <label for="product_first_image" class="form-control">Изображение товара:</label>
            <input type="file" name="product_first_image" id="product_first_image" class="form-control"
            required="required">
        </div>
        <!--Submit-->
        <div class="submit-button"  style="text-align:center;">
            <input type="submit" class="category-btn" name="insert-produc" value="Добавить">
        </div>
    </div>
</form>
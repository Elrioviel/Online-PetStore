<?php
//connect to db
include('./includes/connect.php');

//show categories in homepage
function showCategories()
{
    global $con;
    $select_query="SELECT * FROM `Categories`";
            $result_query=$con->query($select_query);
            $num_rows=mysqli_num_rows($result_query);
            $table_rows=ceil($num_rows/4);
            for($i=0; $i<$table_rows; $i++)
            {
                echo'<div class="row flex-center">';
                $num_cols=0;
                while($num_cols<4)
                {
                    $row=mysqli_fetch_assoc($result_query);
                    if ($row)
                    {
                        $image_data=$row['Category_Picture'];
                        $category_name=$row['Category_Name'];
                        $category_id=$row['Category_ID'];
                        echo"<div class='card-wrapper col-md-6 col-lg-4 mb-4 mb-lg-6'>
                                <div class='card'>
                                    <div class='image'>
                                        <img src='temp-img/Categories/$image_data' alt='$category_name'>
                                    </div>
                                    <div class='category-details'>
                                        <h2 class='name'>$category_name</h2>
                                        <div class='category-go'>
                                        <button><a href='products.php?category=$category_name &categoryid=$category_id '>Перейти</a></button>
                                        </div>
                                    </div>
                                </div>   
                            </div>";
                        $num_cols++;
                    }
                    else
                    {
                        break;
                    }    
                }
                echo'</div>';
            }
}

//show brands in homepage
function showBrands()
{
    global $con;
    $select_query="SELECT * FROM `brands`";
    $result_query=$con->query($select_query);
    $num_cols=6;
    $num_rows=mysqli_num_rows($result_query);
    $table_rows=ceil($num_rows/6);
    for($i=0; $i<$table_rows; $i++)
    {
        echo'<div class="row flex-center">';
        for($j=0; $j<$num_cols; $j++)
        {
            $row=mysqli_fetch_assoc($result_query);
            $image_data=$row['Brand_Picture'];
            $brand_name=$row['Brand_Name'];
            echo"<div class='column'>
            <a class='brand-card' href='#'><img src='temp-img/Brands/$image_data' alt='$brand_name'></a>
            </div>";
        }
        echo "</div>";
    }
}

//show categories in products page
function showCategoriesInProducts()
{
    global $con;
    $select_query="SELECT * FROM `Categories`";
    $result_query=$con->query($select_query);
    while($row=mysqli_fetch_assoc($result_query))
    {
        $category_title=$row['Category_Name'];
        $category_id=$row['Category_ID'];
        echo "<li><a href='?category=$category_title&categoryid=$category_id'>$category_title</a></li>";
    }
}

//show products in products page
function showProductsInProducts()
{
    global $con;
    $category_id = $_GET['categoryid'];
    if(isset($_GET['category']) && !empty($_GET['category']))
    {
        $category_title = $_GET['category'];
    }
    else
    {
        $select_query = "SELECT Category_Name FROM `Categories` WHERE Category_ID = '$category_id'";
        $result_query = $con->query($select_query);
        $row = mysqli_fetch_assoc($result_query);
        $category_title = $row['Category_Name'];
    }
    echo "<h1>$category_title</h1>";
    $select_query = "SELECT *
    FROM `Products`
    WHERE Products.Category_ID = '$category_id'";
    $result_query = $con->query($select_query);
    $num_rows = mysqli_num_rows($result_query);
    $table_rows = ceil($num_rows / 3);
    for ($i = 0; $i < $table_rows; $i++) 
    {
        echo'<div class="row flex-center">';
        $num_cols = 0;
        while ($num_cols < 3) 
        {
            $row = mysqli_fetch_assoc($result_query);
            if($row)
            {
                $product_id= $row['Product_ID'];
                $product_title = $row['Product_Title'];
                $product_description = $row['Product_Description'];
                $product_price = $row['Product_Price'];
                $product_image = $row['Product_Image1'];
                echo "<div class='column'>
                        <div class='card'>
                            <div class='image'>
                                <img src='temp-img/Products/$product_image' alt='$product_title'>
                            </div>
                            <div class='product-details'>
                                <h2 class='name'>$product_title</h2>
                                <p class='description'>$product_description</p>
                                <p class='price'>$product_price</p>
                                <div class='product-go'>
                                    <button><a href='product.php?productid=$product_id'>Перейти</a></button>
                                    <button>Добавить в Корзину</button>
                                </div>
                            </div>
                        </div>
                    </div>";
                $num_cols++;
            }
            else
            {
                break;
            }
        }
        echo '</div>';
    }
}

//show a product in a product page
function showProduct()
{
    global $con;
    if(isset($_GET['productid']) && !empty($_GET['productid']))
    {
        $product_id = $_GET['productid'];
    }
    else
    {
        echo"<h1>NO PRODUCT SELECTED</h1>";
    }
    $select_query = "SELECT p.Product_Title, p.Product_Description, p.Product_Price, 
    p.Product_Image1, c.Category_Name, c.Category_ID, b.Brand_Name
    FROM Products p
    JOIN Categories c ON p.Category_ID = c.Category_ID
    JOIN Brands b ON p.Brand_ID = b.Brand_ID
    WHERE p.Product_ID='$product_id'";
    $result_query = $con->query($select_query);
    $row=mysqli_fetch_assoc($result_query);
    $Category_Name=$row['Category_Name'];
    $Brand_Name=$row['Brand_Name'];
    $Product_Name=$row['Product_Title'];
    $Product_Description=$row['Product_Description'];
    $Product_Price=$row['Product_Price'];
    $Product_img1=$row['Product_Image1'];
    $Category_ID=$row['Category_ID'];
    echo "<div class='container'>
                <div class='left-column'>
                    <img src='temp-img/Products/$Product_img1' alt='$Product_img1'>
                </div>
                <div class='right-column'>
                    <div class='product-title'>
                        <a href='products.php?category=$Category_Name&categoryid=$Category_ID'>$Category_Name</a>
                        <h1>$Product_Name</h1>
                    </div>
                    <div class='product-description'>
                        <p>$Product_Description</p>
                    </div>
                    <div class='product-brand'>
                        <span>$Brand_Name</span>
                    </div>
                    <div class='product-price'>
                        <span>$Product_Price руб.</span>
                        <a href='' class='add-cart'>Добавить в корзину</a>
                    </div>
                </div>
            </div>";
}
?>
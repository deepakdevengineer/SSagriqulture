<?php


include('./includes/connect.php');

// getting products

function getproducts(){
    global $con;

    if(!isset($_GET['category'])){

$select_query = "SELECT * FROM products ORDER BY RAND() limit 0,9";
$result_query = mysqli_query($con, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
    $product_id = $row['product_id'];
    $product_title = $row['product_title']; // Assuming 'product_title' is the column name in your database
    $product_description = $row['product_description']; // Assuming 'product_description' is the column name in your database
    $product_image1 = $row['product_image1']; // Assuming 'product_image1' is the column name in your database
    $product_price = $row['product_price']; // Assuming 'product_price' is the column name in your database
    $category_id = $row['category_id']; // Assuming 'category_id' is the column name in your database

    echo '<div class="col mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="./Admin/product_images/' . $product_image1 . '" alt="' . $product_title . '">
                <div class="card-body p-4">
                    <div class="text-center">
                        <h5 class="fw-bolder">' . $product_title . '</h5>
                        <p class="card-text">' . $product_description . '</p>
                        $' . $product_price . '
                    </div>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center" style="display:flex;">
                        <a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                        <a class="btn btn-outline-dark mt-auto" href="#">View more</a>
                    </div>
                </div>
            </div>
        </div>';
}
    }

}

// getting unique categories
function get_unique_categories(){
    global $con;

    if(isset($_GET['category'])){
        $category_id = $_GET['category'];

$select_query = "SELECT * FROM 'products where category_id=$category_id";
$result_query = mysqli_query($con, $select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
    echo "<h2 class='text-center text-danger'> No Stock for this category </h2>";
}

while ($row = mysqli_fetch_assoc($result_query)) {
    $product_id = $row['product_id'];
    $product_title = $row['product_title']; // Assuming 'product_title' is the column name in your database
    $product_description = $row['product_description']; // Assuming 'product_description' is the column name in your database
    $product_image1 = $row['product_image1']; // Assuming 'product_image1' is the column name in your database
    $product_price = $row['product_price']; // Assuming 'product_price' is the column name in your database
    $category_id = $row['category_id']; // Assuming 'category_id' is the column name in your database

    echo '<div class="col mb-5">
    <div class="card h-100">
        <img class="card-img-top" src="./Admin/product_images/' . $product_image1 . '" alt="' . $product_title . '">
        <div class="card-body p-4">
            <div class="text-center">
                <h5 class="fw-bolder">' . $product_title . '</h5>
                <p class="card-text">' . $product_description . '</p>
                $' . $product_price . '
            </div>
        </div>
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center" style="display:flex;">
            <a class="btn btn-outline-dark mt-auto" href="shop2.php?add_to_cart=' . $product_id . '">Add to cart</a>
            <a class="btn btn-outline-dark mt-auto" href="#">View more</a>
            </div>
            </div>
            </div>
            </div>';
            

}
    }

}







// displaying categories in center of page

function getcategories(){
    global $con;
    $select_categories = "SELECT * FROM categories";
        $result_categories = mysqli_query($con, $select_categories);
        while ($row_data = mysqli_fetch_assoc($result_categories)) {
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo "<div class='col-md-4'>
                    <ul class='category-list'>
                        <li><a href='index.php?category=$category_id'>$category_title</a></li>
                    </ul>
                  </div>";
        }
}


// searching products function

function search_products(){
    
}
function getIPAddress() {  
    //whether ip is from the share internet  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    //whether ip is from the remote address  
    else {  
        $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}

function cart(){

}



?>

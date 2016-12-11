<?php
$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
function getProductDetails4Addmin() {
    global $conn;
    $get_pro = "select * from product_info";
    $run_get_pro = mysqli_query($conn, $get_pro);
    while ($row_pro = mysqli_fetch_array($run_get_pro)) {
        $product_id = $row_pro['id'];
        $product_name = $row_pro['product_name'];
        $product_desc = $row_pro['product_description'];
        $product_image = $row_pro['product_logo_nm'];

        echo "
                <div class='col-md-4'>
                <img src='../images/product_img/$product_image' width='180' height='180' alt='No image found' style='background-color: #000' class='img-responsive'>
               <p> <h6 class='text-yellow'>$product_name</h6>
                <a href='productSingleView.php?&id= " . $product_id . " target='_blank'>Read More...</a></p>                
             </div>
                            
";
    }
}
function getProductDetails() {
    global $conn;
    $get_pro = "select * from product_info";
    $run_get_pro = mysqli_query($conn, $get_pro);
    while ($row_pro = mysqli_fetch_array($run_get_pro)) {
        $product_id = $row_pro['id'];
        $product_name = $row_pro['product_name'];
        $product_desc = $row_pro['product_description'];
        $product_image = $row_pro['product_logo_nm'];

        echo "
                <div class='col-md-4'>
                <img src='../images/product_img/$product_image' width='180' height='180' alt='No image found' style='background-color: #000' class='img-responsive'>
               <p> <h6 class='text-yellow'>$product_name</h6>
                <a href='../showProducts.php?&id= " . $product_id . " target='_blank'>Read More...</a></p>                
             </div>
                            
";
    }
}

function getProductDetails4HomePage() {
    global $conn;
    $get_pro = "select * from product_info";
    $run_get_pro = mysqli_query($conn, $get_pro);
    while ($row_pro = mysqli_fetch_array($run_get_pro)) {
        $product_id = $row_pro['id'];
        $product_name = $row_pro['product_name'];
        $product_desc = $row_pro['product_description'];
        $product_image = $row_pro['product_logo_nm'];
        
        echo "
       <li>
                                <div class='portfolio-item'>
                                    <img src='images/product_img/$product_image' class='img-responsive' alt='' width='350px' height='250px'/>
                                    <div class='portfolio-caption'>
                                        <h4>$product_name</h4>
                                        <a href='./showProducts.php?&id= ".$row_pro["id"]." id='".$row_pro["id"]."' data-toggle='modal' class='link-1'><i class='fa fa-search'></i></a>
                                        <a href='./showProducts.php?&id= ".$row_pro["id"]." target='_blank' class='link-2'><i class='fa fa-link'></i></a>
                                    </div>
                                </div>
                            </li>
";
    }
}

function getProductDetailsByCategory() {
    global $conn;
    $cat_id = $_GET['catid'];
    $sql = "select * from product_info where product_cat='" . $cat_id . "'";
    $run_pro = mysqli_query($conn, $sql);
   
    
   if($cat_id == 1){
      while ( $row_pro = mysqli_fetch_array($run_pro)) {    
          $product_id = $row_pro['id'];
        $product_name = $row_pro['product_name'];
        $product_desc = $row_pro['product_description'];
        $product_image = $row_pro['product_logo_nm'];
        echo "
             <div class='col-md-4'>
                <img src='images/product_img/$product_image' width='400' height='300' alt='No image found' style='background-color: #000' class='img-responsive'>
               <p> <h6 class='text-yellow'>$product_name</h6>
                <a href='./showProducts.php?&id= " . $product_id . " target='_blank'><i class='fa fa-link'></i>Read More...</a></p>                
             </div>
    ";
    }  
   }  else {
       $row_pro = mysqli_fetch_array($run_pro);
       $product_desc = $row_pro['product_description'];
      echo $product_desc;
   }
}

function getSingleProductDetailsById() {
    global $conn;
    $product_id = $_GET['id'];

// echo '<script>alert("'.$product_id.'")</script>';
    $get_pro = "select * from product_info where id = '" . $product_id . "'";
//    $get_pro = "select * from product_info";
    $run_get_pro = mysqli_query($conn, $get_pro);
    //echo $run_get_pro;
// echo '<script>alert("'.$get_pro.'")</script>';
    while ($row_pro = mysqli_fetch_array($run_get_pro)) {
        $product_id = $row_pro['id'];
        $product_name = $row_pro['product_name'];
        $product_desc = $row_pro['product_description'];
        $product_image = $row_pro['product_logo_nm'];

        echo "
        <div class='single_product'>
        <h1></h1>
             <div class='col-md-4'>
                <img src='images/product_img/$product_image' width='180' height='180' alt='No image found' sytle='background-color:black'>
                <p>$product_name</p>
                <span>$product_desc</span>        
             </div>
        </div>
    ";
    }
}

function getImage4Slide() {
    global $conn;
    $get_pro = "select * from product_info";
    $run_get_pro = mysqli_query($conn, $get_pro);
//    $row_pro = mysqli_fetch_array($run_get_pro);
    while ($row_pro = mysqli_fetch_array($run_get_pro)) {
        $product_id = $row_pro['id'];
//        $product_name = $row_pro['product_name'];
//        $product_desc = $row_pro['product_description'];
        $product_image = $row_pro['product_logo_nm'];
        
        echo " <ol class='carousel-indicators'>
                            <li data-target='#main-slide' data-slide-to='0' class='active'></li>                            
                        </ol><div class='carousel-inner'>
                            <div class='item active'><img class='img-responsive' src='images/product_img/$product_image' alt='slider' sytle='background-color:black'>
                                                            <div class='slider-content'>
                                                                <div class='col-md-6 text-left'>
                                                                    <h1 class='animated3'>
                                                                        <span><strong>ZAYAN TECHNOLOGY</strong></span>
                                                                    </h1>
                                                                    <p class='animated2'style='color:green'>Largest Erp Solutions in Bangladesh </p>	
                                                                    <a href='#feature' class='page-scroll btn btn-primary animated1'>SERVICES</a>
                                                                </div>
                                                            </div></div></div>";
    }
    
    
}


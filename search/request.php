<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" data-ng-app="website">
	<title>MakeUp</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />                           
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
    @import url(http://fonts.googleapis.com/css?family=Alegreya+Sans:regular,100,100italic,300,300italic,italic,500,500italic,700,700italic,800,800italic,900,900italic|Crimson+Text:regular,italic,600italic,600,700,700italic|Montserrat:regular,100,100italic,200,200italic,300,300italic,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Roboto:regular,100,100italic,300,300italic,italic,500,500italic,700italic,900italic,900,700&amp;subset=latin,cyrillic,cyrillic-ext,latin-ext,greek,vietnamese,greek-ext);
    </style>

   	<link rel="stylesheet" href="../css/main.css" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--CSS Slider -->
    <link href="css/tiksluscarousel.css" rel="stylesheet">
</head>
<body class="makeup-background">

<div class="row-fixed"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


<!--Content-->
<div class="row" style="padding-bottom: 5%;">    
    <!-- Slider -->
    <div class="col-md-7">

        <!--code implementation -->
        <div id="carousel1">
        <ul>
        <li><img src="../img/mt-1314_product_img01.jpg" /></li>
        <li><img src="../img/mt-1314_product_img01-1.jpg" /></li>
        <li><img src="../img/mt-1314_product_img01-2.jpg" /></li>
        </ul>
        </div>

    </div>
    
    <!-- Info -->
    <div class="col-md-5">
    
            <div>
                <h2 class="s-product-title">All Day UV Moisture Cream SPF 15</h2>
            </div>

            <div class="row info-content">
                <div class="col-md-2">Brand:</div><div class="col-md-10">Nivea</div>
                <br/>
                <br/>
                <div class="col-md-2">SKU:</div><div class="col-md-10">00101</div>
            </div>  
            
            <div class="row" style="padding-top: 5%;">                          
                <div class="col-md-12">
                    <p class="main-price">$44.00 <strike class="old-price">$55.00</strike></p>
                </div>
            </div>

            <hr />

            <div>
                <p class="available-title">Available Options</p>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <span class="available-text">QUANTITY:</span>
                    <span class="spinner-wrap available-text" style="margin-right: 20px; margin-bottom: 20px;">
                    <input
                    type="number"                    
                    id="quantity"
                    name="quantity"
                    value="1";
                    min="1"
                    max="10"
                    required=""
                    class="input-quantity">
                    </span>
                </div>

                <!-- Product's id -->
                <div class="col-md-4">
                    <input value="1000" id="id_product" hidden="">
                </div>                
            </div>

            <div class="row">
                <div class="col-md-1">
                    <!--El evento está en main.js-->
                    <button id="cart-button" type="button" class="btn btn-secondary cart-text">ADD TO CART</button>
                </div>
            </div>
    </div>
</div>

<hr noshade>

        <div class="detail-text" style="text-align: justify;">

            <p class="description-title">DESCRIPTION</p>

            <p class="info-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, explicabo. Maiores exercitationem aliquam optio distinctio error alias iusto, voluptas porro ducimus, sed praesentium consectetur voluptatem perferendis impedit natus. Officia, rem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cupiditate porro optio dignissimos voluptas, natus laborum non vel. Odio quas sequi possimus obcaecati magnam tempora nostrum sit minus totam nobis? </p>

            <p class="info-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sed necessitatibus a voluptatem quibusdam unde quas dignissimos, aliquid animi, similique et consectetur rem totam facere quasi adipisci. Eum, explicabo, ullam.</p>

        </div>

        <div class="product-title">
            <p style="text-align: center;">RELATED PRODUCTS</p>
        </div>

        <div class="row">   

                <!-- Product -->   
                <div class="col-sm-3">                      

                        <div class="image">
                            <a class="image-link" href="search/request.php?q=<?php echo '#'; ?>">
                                
                                <div class="text-on-image text-center">

                                    <img src="../img/mt-1314_product_img02.jpg" class="picture-align">

                                    <div class="sale-text caption">SALE</div>
                                
                                </div>

                            </a>
                        </div>

                        <div class="name-product">
                            <a href="search/request.php?q=<?php echo '#'; ?>">
                                <span>All Day UV Moisture Cream SPF 15</span>
                            </a>
                        </div>                  


                        <div style="padding-top: 2%;">                            

                            <div style="display: inline-block;">
                                <p class="main-price">$44.00 &nbsp;</p>
                            </div>

                            <div class="old-price" style="display: inline-block;">                              
                                <strike>$55.00</strike>
                            </div>

                        </div>

                </div>
                <!-- End Product -->

        </div>

          
            </div>
        </div>
    </div>
</div>


    


    <script src="../js/main.js"></script>
    <script language="javascript">
//Cart Button
document.getElementById("cart-button").onclick = function () {
        
        //quantity
        var quantity = $("#quantity").val();

        //id
        var id_product = $("#id_product").val();

        location.href = "#";
};
    </script>
    <!-- Slider -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tiksluscarousel.js"></script>
    <script language="javascript">
        $(document).ready(function(){
        $("#carousel1").tiksluscarousel({progressBar:false,width:640,height:480,nav:'thumbnails',type:"slide"});
        });
    </script>
    
</body>
</html>
<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>:: Beco India ::</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom-style.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        
    <![endif]-->
    <style type="text/css">
            #container .pagination ul li.inactive,
            #container .pagination ul li.inactive:hover{
                background-color:#ededed;
                color:#bababa;
                border:1px solid #bababa;
                cursor: default;
                display: none;
            }
            #container .pagination{
                height:30px; 
                background:url('images/filterbar-bg.jpg') repeat-x;
            }
            #container .pagination ul li{
                font-size: 13px;
                color: #666666;
                padding: 2px;
                list-style: none;
                float: left;
                cursor: pointer;
                text-decoration: none;
            }
            #container .pagination ul li:hover{
                text-decoration: underline;
            }
            #container .pagination ul{
                margin: 0px !important;
            }
            .Sorting{
                background-image: url("./images/sort_both.png");
                background-position: right center;
                background-repeat: no-repeat;
                cursor: pointer;
            }
            .Sorting.asc{
                background-image: url("./images/sort_asc.png") !important;
                background-position: right center;
                background-repeat: no-repeat;
                cursor: pointer;
            }
            .Sorting.desc{
                background-image: url("./images/sort_desc.png") !important;
                background-position: right center;
                background-repeat: no-repeat;
                cursor: pointer;
            }
            </style>
    <script>
        function loadData(page,CategoryID){
            $('#loading').html("Loading...").fadeIn('fast');
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: "filter=GetProductPaging&CategoryID="+CategoryID+"&page="+page,
                success: function(html)
                {
                    //alert(CategoryID);
                    $('#loading'+CategoryID).hide();
                    $("#ProductList"+CategoryID).html(html);
                }
            });
        }
        $('#container .pagination li').click(function(event){
            //alert("Asd");
            var page = $(this).attr('p');
            loadData(page);
        });
        
    </script>
</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            <li class="sidebar-brand">
                <a href="index.php#top"  onclick = $("#menu-close").click(); >Menu</a>
            </li>
            <li>
                <a href="index.php" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="index.php#about" onclick = $("#menu-close").click(); >About</a>
            </li>

            <li>
                <a href="index.php#product" class="parent">Our Product</a>
                <ul class="submenu">
                    <?php 
                        $selectCategory = "SELECT * FROM `master_category` where Active='1' AND Parents='0'";
                        $ObjselectCategory = mysqli_query($selectCategory);
                        while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
                        {
                            ?>
                                <li><a href="category.php?id=<?php echo $RsselectCategory['CategoryID'];?>"><?php echo $RsselectCategory['CategoryName'];?></a></li>
                            <?php        
                        }
                    ?>
                    
                </ul>
            </li>

            <li>
                <a href="index.php#product" onclick = $("#menu-close").click(); >Our Vendors</a>
            </li>


            <li>
                <a href="index.php#product" onclick = $("#menu-close").click(); >Downloads</a>
            </li>

            <li>
                <a href="index.php#product" onclick = $("#menu-close").click(); >Gallery</a>
            </li>



            <li>
                <a href="index.php#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1><img src="img/home-logo.png" class="" ></h1>
         <!--   <a href="#about" class=""><img src="img/home-arrow.png" class="" ></a>-->
         
              <div class="down-arrow">
		<a href="#about" gumby-goto="#home" class="skip" gumby-offset="-50" gumby-update><i class="fa fa-angle-double-down" style="color:#000; font-size:21px;"></i></a>
	</div>
</div>
        </div>
    </header>
	<!-- Header END -->
	<?php
        $selectCategory = "SELECT * FROM `master_category` where Active='1' AND CategoryID='".$_REQUEST['id']."'";
        $ObjselectCategory = mysqli_query($selectCategory);
        $RsselectCategory = mysqli_fetch_array($ObjselectCategory);
    ?>         
    <!-- product -->
    <section id="product" class="product" style="background: #fff;">   
        <div class="container">
			<div class="row">
				<div class="col-lg-12 text-center"><h1 style="color:#6A6A6A;"><?php echo $RsselectCategory['CategoryName'];?></h1></div>
			</div>
                <div class="mk"></div>			
			<div class="row product-line">
                <?php
                
                    $selectCategoryParents = "SELECT * FROM `master_category` where Active='1' AND Parents='".$_REQUEST['id']."'";
                    $ObjselectCategoryParents = mysqli_query($selectCategoryParents);
                    while($RsselectCategoryParents = mysqli_fetch_array($ObjselectCategoryParents))
                    {
                        $selectProduct = "SELECT * FROM `master_products` WHERE CategoryID = '".$RsselectCategoryParents['CategoryID']."'";
                        $ObjselectProduct = mysqli_query($selectProduct);
                        $NumselectProduct = mysqli_num_rows($ObjselectProduct);
                        if($NumselectProduct==0)
                        {
                            $href = "category.php?id=".$RsselectCategory['CategoryID'];    
                        }
                        else
                        {           
                            $RsselectProduct = mysqli_fetch_array($ObjselectProduct);                                          
                            $href = "productlist.php?id=".$RsselectCategoryParents['CategoryID'];
                        }
                        
                        ?>
                            <!--<a href="<?php echo $href;?>">-->
                                <div class="col-md-12 col-sm-12">
                                    <p class="product-info" style="color:#6A6A6A;text-transform: uppercase;font-size: 26px;padding-bottom: 10px;padding-left: 0px;text-decoration: underline;"><?php echo $RsselectCategoryParents['CategoryName'];?></p>
                                </div>
                            <!--</a>-->
                            <div id="ProductList<?php echo $RsselectCategoryParents['CategoryID'];?>" class="ProductList" rel="<?php echo $RsselectCategoryParents['CategoryID'];?>"></div>
                            <div id="loading<?php echo $RsselectCategoryParents['CategoryID'];?>">Loading...</div>
                            <script>
                                loadData(1,'<?php echo $RsselectCategoryParents['CategoryID'];?>'); // For first time page load default results
                                
                            </script>
                        <?php
                    }
                    ?>
                        <div class="col-md-12 col-sm-12">
                            <p class="product-info" style="color:#6A6A6A;text-transform: uppercase;font-size: 26px;padding-bottom: 10px;padding-left: 0px;text-decoration: underline;">Product</p>
                        </div>
                    <?php
                    $selectCategory = "SELECT * FROM `master_products` where Active='1' AND CategoryID='".$_REQUEST['id']."'";
                    $ObjselectCategory = mysqli_query($selectCategory);
                    while($RsselectCategory = mysqli_fetch_array($ObjselectCategory))
                    {
                        ?>
                            <!--<a href="product.php?id=<?php echo $RsselectCategory['ProductID'];?>">-->
                                <div class="col-md-4 col-sm-2">
                                    <img src="uploads/<?php echo $RsselectCategory['ProductImage'];?>" class="" width="300px" >
                                    <p class="product-info" style="color:#6A6A6A;"><?php echo $RsselectCategory['ProductName'];?></p>
                                </div>
                            <!--</a>-->
                        <?php                        
                    }
                ?>
			</div>
			
			<!--<div class="row product-line text-center">
				<div class="col-md-4 col-sm-2">
					<img src="img/product01.png" class="" >
					<p class="product-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				
				<div class="col-md-4 col-sm-2">
					<img src="img/product02.png" class="" >
					<p class="product-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				
				<div class="col-md-4 col-sm-2">
					<img src="img/product03.png" class="" >
					<p class="product-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>-->
        </div>
        <!-- /.container -->
    </section>
    
             
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
					<div>
						<!--<ul class="social_icons">
							<li><a href="#" class=""><img src="img/facebook.png" class="" ></a></li>
							<li><a href="#" class=""><img src="img/twitter.png" class="" ></a></li>
							<li><a href="#" class=""><img src="img/pinterest.png" class="" ></a></li>
							<li><a href="#" class=""><img src="img/rss-field.png" class="" ></a></li>
						</ul>-->
                        
                      <div class="footer-social-icons">
                        <a href="https://www.facebook.com/becoindia?fref=ts " target="_blank" title="Facebook" class="margin-right15">
                            <span class="fa fa-facebook"></span>
                        </a>
                        <a href="https://twitter.com/Beco_India" target="_blank" title="Twitter" class="margin-right15">
                            <span class="fa fa-twitter"></span>
                        </a>
                        <a href="https://plus.google.com/109315775028979717075/posts" target="_blank" title="Google+">
                            <span class="fa fa-google-plus"></span>
                        </a>
                         
                    </div>


					</div>
                    <p class="text-muted">Copyright &copy; 2015. All Rights Reserved.</p>
					<p class="text-muted">Design: <a href="http://www.vfoundx.com" target="_blank" class="copy">VfoundX Digital Pvt Ltd</a></p>
                </div>
            </div>
        </div>
        
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<script src="js/validate.js"></script>
	
    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#sidebar-nav li a").click(function(e) {
        $(this).next().toggle();
    });
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if(!$(this).hasClass('parent'))
                {
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
                else
                {
                    $(this).next().toggle();
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>

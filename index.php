<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welecom to TraVinh</title>
        <link rel="icon" href="./upload/logotvu.png">
        <link rel="stylesheet" href="./include/fontawesome/css/all.css">
        <link rel="stylesheet" href="./include/style/bootstrap.css">
        <link rel="stylesheet" href="include/mystyle45646.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        
        <?php session_start(); ?>
        <style>

        </style>
    </head>
    <body>
        
    <?php require_once "./view/header.html" ?>
<div class="greeting">
 

    <div id="mycarousel" class="carousel slide" data-ride="carousel">

<!--Cho hiện thị chỉ số nếu muốn-->
<ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1" class=""></li>
    <li data-target="#mycarousel" data-slide-to="2" class=""></li>
</ol>
<!--Hết tạo chỉ số-->

<!--Các slide bên trong carousel-inner-->
<div class="carousel-inner">

    <!--Slide 1 thiết lập hiện thị đầu tiên .active-->
    <div class="carousel-item active">
        <img class="d-block w-10" style="width: 100%; height:500px; min-width:1000px;"  src="./upload/gt12.jpg">
       
         <!--Cho thêm hiện thị thông tin-->
         <div class="carousel-caption d-none d-md-block">
            <h2>TraVinh tourist attractions</h2>
            <h2>Welcome to a melting pot of natural beauty and warm hospitality</h2>
        </div>
       
    </div>

    <!--Slide 2-->
    <div class="carousel-item"> 
        <img  style="width: 100%; height:500px;" class="d-block w-10" src="./upload/gt13.jpg">
    </div>
    <!--Slide 3-->
    <div class="carousel-item">
        <img  style="width: 100%; height:500px;" class="d-block w-10" src="./upload/gt10.jpg">
    </div>
    
</div>



<!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
<!--Hết tạo điều khiển chuyển Slide--> 

</div>
        
<!--Het-->


</div>

   <div class="introduce-Vietnam">
        <div class="container">
        <br>
            <p style="color: #f2f2f2; font-size:70px; font-weight:500 ;font-family:'Times New Roman', 'ZCOOL QingKe HuangYou', cursive;" >Trà Vinh</p>
            <p style="color: #f2f2f2; font-size:20px; font-weight:300 ; font-family:'Times New Roman', 'ZCOOL QingKe HuangYou', cursive;" >Trà Vinh là một tỉnh thuộc đồng bằng sông Cửu Long;
             vị trí địa lý giới hạn từ 9°31'46" đến 10°4'5" vĩ độ Bắc và từ 105°57'16" đến 106°36'04" kinh độ Đông.
              Trà Vinh cách Thành phố Hồ Chí Minh 200 km đi bằng quốc lộ 53 qua tỉnh Vĩnh Long, khoảng cách rút ngắn thời gian chỉ còn 130 km nếu đi bằng quốc lộ 60 qua tỉnh Bến Tre, 
              cách thành phố Cần Thơ 50 km. Được bao bọc bởi sông Tiền, sông Hậu với 02 cửa Cung Hầu và Định An nên giao thông đường thủy có điều kiện phát triển.Trà Vinh là tỉnh duyên hải Đồng bằng sông Cửu Long, có vị trí địa lý:

<p style="color: #f2f2f2; font-size:20px; font-weight:300 ; font-family:'Times New Roman', 'ZCOOL QingKe HuangYou', cursive;" >Phía Đông giáp Biển Đông với 65 km bờ biển.</p>
<p style="color: #f2f2f2; font-size:20px; font-weight:300 ; font-family:'Times New Roman', 'ZCOOL QingKe HuangYou', cursive;" >Phía Tây giáp Vĩnh Long.</p>
<p style="color: #f2f2f2; font-size:20px; font-weight:300 ; font-family:'Times New Roman', 'ZCOOL QingKe HuangYou', cursive;" >Phía Nam giáp Sóc Trăng với ranh giới là sông Hậu.</p>
<p style="color: #f2f2f2; font-size:20px; font-weight:300 ; font-family:'Times New Roman', 'ZCOOL QingKe HuangYou', cursive;" >Phía Bắc giáp Bến Tre với ranh giới là sông Cổ Chiên.</p>
       <br> 

    </div>
   </div>


    <div class="article-composition">
        <div class="container">

        </div>
    </div>


   <div class="article-composition">
        <div class="container">

            <table style="width: 100%;">
                <tr style="width: 100%;">
                    <td style="width: 50%;">
                    <p style="color:#111;font-family: 'ZCOOL QingKe HuangYou', cursive; font-weight:500; font-size:35px; "></p>
                </td>
                   
                </tr>
            </table>
           <?php
            require_once "./module/ClassPosts.php";
             $getlistpost  = new ClassPosts();
             $getlistpost  = $getlistpost ->getlistTitleAndAvatar();
             $sumcount = sizeof( $getlistpost);
             $count = 0;
             while($count < $sumcount){
                    echo '<a href="./post.php?id='.$getlistpost[$count][0].'">
                    
                    <table class="box-posts">
                    
                            
                           <tr style="width: 100%;">
                           
                               <td style="width: 35%;">
                                 <img style="width: 100%; height:350px" src="'.$getlistpost[$count][2].'">
                               </td>
                               
                               <td style="width: 5%;"></td>
                               <td style="width: 60%;">
                                   <div style="height: 70%;  line-height:80% ; ">
                                       <h1 style="margin-top: 55px;">
                                       '.$getlistpost[$count][1].'
                                       </h1>
                                   </div>
                                   <hr>
                                   <div style="height: 30%; color:#000">
                                      posted by <b style="margin-left:4px;">Admin</b>
                                      
                                   </div>
                                                 
                               </td>
                               
                           </tr>
                           
                       </table>
                   </a>';
                   $count++;
             }
           ?>

            

            </div>
        </div>


   </div>


    <?php include"./view/footer.php"; ?>
</body>
</html>


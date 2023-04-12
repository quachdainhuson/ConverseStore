<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Public/css/admin.css">
    <script src="ckeditor/ckeditor.js"></script>
    <style>

    </style>
</head>


<body>

    <div class="header-bar">
        <div id="name-store">
                    <a href=""></a>Phone Store</a>
                </div>
                <ul class="nav justify-content-end" style="margin-top: -40px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Admin
                    </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>

                        </ul>
                    </li>
                </ul>
            </div>


    </div>
    <div class="container-fluit">
        <div class="slide-bar">
            <div class="search">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <div class="categories">
                <div class="list-group">
                    <a href="?controller=admin" class="list-group-item list-group-item-action ">
                        <svg xmlns="http://www.w3.org/2000/svg " width="16 " height="16 " fill="currentColor " class="bi bi-speedometer " viewBox="0 0 16 16 ">
                            <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5
                            0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z "/>
                            <path fill-rule="evenodd " d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z "/>
                        </svg> DashBoard
                    </a>
                    <a href="?controller=admin&redirect=user" class="list-group-item list-group-item-action  "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg> Quản Lý Thành Viên
                    </a>
                    <a href="?controller=admin&redirect=product" class="list-group-item list-group-item-action active" aria-current="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg> Quản Lý Sản Phẩm
                    </a>
                        <a href="?controller=admin&redirect=categories" class="list-group-item list-group-item-action "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
                        <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg> Quản Lý Danh Mục
                    </a>
                    </a>
                        <a href="receipt.html" class="list-group-item list-group-item-action "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg> Quản Lý Đơn Hàng
                    </a>
                </div>
            </div>
        </div>
        </div>
        <div class="content">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="" height="25" fill="currentColor" class="bi bi-houses" viewBox="0 0 16 16">
                        <path d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708L5.793 1Zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207l-4.5-4.5Z"/>
                      </svg> </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sản Phẩm / Thêm Sản Phẩm</li>
                </ol>
            </nav>

            <p><strong style="font-size: 50px; margin-left: 20px;">Sản Phẩm</strong></p>
            <br>
            <div class="container-fluid">
                <div class="row">
                <form role="form"  enctype="multipart/form-data" method="post" action="?controller=<?= $controller ?>&redirect=<?= $redirect ?>&action=store">
                    <div class="col-4" style = "padding-left: 50px; float: left;" >
                        <br>
                        <br>
                        <input type="file" multiple name="product_image[]" id="product_image" onchange="preview()" multiple>
                        <img id="frame" src="image/no-img.png" width="300px" height="400px"/>
                    </div>
                    <div class="col-8" style="padding-left: 50px; float: right;">
                        <br><br><br><br>
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input required name="product_name" class="form-control" placeholder="">
                                    </div>                            
                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input required name="product_price" type="number" min="0" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Sản phẩm nổi bật</label>
                                        <div class="checkbox">
                                            <label>
                                                <input name="product_featured" type="checkbox">Nổi Bật</input>
                                            </label>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        <select name="cate_id" class="form-control">
                                        <?php 
                                        foreach($values['categories'] as $category){
                                            echo $category['cate_name']; 
                                    ?>
                                            <option value="<?= $category['cate_id'];?>"><?= $category['cate_name'];?></option>
                                            <?php
                                        }
                                    ?>
                                        </select>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label>Size</label>
                                    <?php
                                    foreach($values['size'] as $size){
                                    ?>
                                        <label for="quantity_<?php echo $size['size_number']; ?>"><?php echo $size['size_number']; ?>:</label>
                                        <input type="number" name="<?php echo $size['size_number']; ?>" id="quantity_<?php echo $size['size_id']; ?>" min="0" value="0" required><br>
                                    <?php 
                                    } ?>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Màu Sắc</label>
                                        <select name="color_id" class="form-control">
                                        <?php 
                                        foreach($values['color'] as $color){
                                        ?>
                                            <option value="<?= $color['color_id'];?>"><?= $color['color_name'];?></option>
                                        
                                        <?php
                                        }
                                        ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Kiểu Dáng</label>
                                        <select name="style_id" class="form-control">
                                        <?php 
                                        foreach($values['style'] as $style){
                                    ?>
                                            <option value="<?= $style['style_id'];?>"><?= $style['style_name'];?></option>
                                            <?php
                                        }
                                    ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea required name="product_description" id="product_description" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <input name="sbm" type="submit" value="Thêm mới" class="btn btn-primary"></input>
                                    <button type="reset" class="btn btn-light">Reset</button>
                                </form>
                    </div>
                    
                    
            </div>



            <!--/.row-->
        </div>
        
                
    </div>

    </div>
    <script>
        function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <script>CKEDITOR.replace('product_description')</script>
</body>

</html>
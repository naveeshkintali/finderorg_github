<?php 
    include("components/header.php"); 
    include("db/conn.php"); 
?>

<div class="container">
    <div class="row pt-5 height d-flex justify-content-center align-items-center">
        <div class="col-12">
            <form action="" class="my-3">
                <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                    <div class="input-group">
                        <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon1"
                            class="form-control border-0 bg-light rounded-pill">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link text-warning"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-8 p-3 shadow-sm bg-white border border-grey rounded-3">
            <div class="row blog-wrapper">
                <div class="col-12 ">
                    <h3 class="new">NEW ON BLOG</h3>
                </div>
            </div>
            <?php 
                $sql  = "SELECT * FROM finderorg_us_post ORDER BY id ASC LIMIT 1";
                $run = mysqli_query($conn,$sql);
                $foundnum = mysqli_num_rows($run);
                $getquery = mysqli_query($conn,$sql);
                if(mysqli_num_rows($getquery) > 0){
                    while($row = mysqli_fetch_array($getquery))
                    {
                        echo'
                        <div class="row pb-5 blog-wrapper border-bottom">
                            <div class="col-12 mb-3">
                                <h1>
                                    <a href="">
                                    '.$row["title"].'
                                    </a>
                                </h1>
                            </div>
                            <div class="col-12 col-md-3 p-2 text-center">
                                <img src="assets/images/img-1.png" class="img-thumbnail border border-grey rounded-2">
                            </div>
                            <div class="col-12 col-md-9">
                                <p class="p-2">
                                 '.substr($row['content'], 0, 300 ).' ... <a href="'.$row["id"].'">Read More »</a>
                                </p>
                            </div>
                        </div>';
                    }
                }
            ?>
            <div class="row my-5 blog-wrapper">
                <?php 
                $sql  = "SELECT * FROM finderorg_us_post ORDER BY id ASC LIMIT  2,4";
                $run = mysqli_query($conn,$sql);
                $foundnum = mysqli_num_rows($run);
                $getquery = mysqli_query($conn,$sql);
                if(mysqli_num_rows($getquery) > 0){
                    while($row = mysqli_fetch_array($getquery))
                    {
                        echo'
                            <div class="col-12 col-md-6 d-flex gap-2 mb-3">
                                <img src="assets/images/img-2.png" class="border border-grey rounded-2 w-25">
                                <h4><a href="">'.$row["title"].'</a> </h4>
                            </div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 p-3">
            <p class="muted-text">FEATURED WORDPRESS PLUGINS <a href="/categorp.php">(View all)</a> </p>
        </div>
    </div>
    <div class="row">
        <?php 
            $sql  = "SELECT DISTINCT Category FROM finderorg_us";
            $run = mysqli_query($conn,$sql);
            $foundnum = mysqli_num_rows($run);
            $getquery = mysqli_query($conn,$sql);
            if(mysqli_num_rows($getquery) > 0){
                while($row = mysqli_fetch_array($getquery))
                {
                echo'
                    <div class="col-4 col-md-2 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex gap-2 align-items-center">
                                    <h4><a href="">'.$row["Category"].'</a> </h4>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            }
        ?>
    </div>
</div>

<?php include("components/footer.php"); ?>
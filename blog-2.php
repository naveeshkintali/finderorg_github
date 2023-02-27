<?php 
    include("components/header.php"); 
    include("db/conn.php"); 
?>
<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-8 p-3 shadow-sm bg-white border border-grey rounded-3">
            <div class="row blog-wrapper">
                <div class="col-12 mb-4">
                    <h1 class="">BLOG</h1>
                </div>
            </div>
            <?php 
                $limit = 5;
                $sql  = "SELECT * FROM finderorg_us_post ORDER BY id ASC";
                $run = mysqli_query($conn,$sql);
                $foundnum = mysqli_num_rows($run);
                $getquery = mysqli_query($conn,$sql);
                // get the required number of pages
                $total_pages = ceil ($foundnum / $limit);
                
                // Define the total number of items to be paginated
                $total_items = 25;

                // Define the number of items to be displayed per page
                $items_per_page = 5;

                // Calculate the total number of pages
                $total_pages = ceil($total_items / $items_per_page);
                                
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                // Calculate the offset for the SQL query
                $offset = ($current_page - 1) * $limit;

                // update the active page number
                if (!isset ($_GET['page']) ) {  
                    $page_number = 1;  
                } else {  
                    $page_number = $_GET['page'];  
                }    

                // get the initial page number

                $initial_page = ($page_number-1) * $limit;   

                // get data of selected rows per page    

                $getQuery = "SELECT * FROM finderorg_us_post LIMIT " . $initial_page . ',' . $limit;  

                $result = mysqli_query($conn, $getQuery);       

                //display the retrieved result on the webpage  

                while ($row = mysqli_fetch_array($result)) {  
                    $title = $row["title"];
                    $category = $row["category"];
                    $content = $row["content"];
                    
                    $titleCleanURL = preg_replace('/[^\p{L}\p{N}\s]/u', '',  $title);
                    $titleCleanURL = trim(str_replace("  "," ", strtolower(str_replace("="," ",str_replace("^"," ",str_replace("*"," ",str_replace("%"," ",str_replace("!"," ",str_replace("@"," ",str_replace("#"," ",str_replace("$"," ",str_replace("&"," ",str_replace("@"," ",str_replace("+"," ",str_replace("_"," ",str_replace("/"," ",str_replace("-", " ", $titleCleanURL)))))))))))))))));
                    $titleCleanURL = str_replace(" ","-",$titleCleanURL);

                    $postCleanURL = $titleCleanURL;
			        $date = date("M d, Y", strtotime($row['date']));

                    echo'
                        <div class="row blog-wrapper ">
                            <div class="col-12 pt-5 border-top">
                                <h1>
                                    <a href="'.$baseURL.'blog/'.$postCleanURL.'">
                                    '.$row["title"].'
                                    </a>
                                </h1>
                                <span>
                                '?>
            <?php
                                $old_date = date($row["date"]);
                                $old_date_timestamp = strtotime($old_date);
                                $new_date = date('D d-M,Y', $old_date_timestamp);
                                echo'
                                '.$new_date.'
                                </span>
                            </div>
                            <div class="row pb-5">
                                <div class="col-12 col-md-3 p-2">
                                    <img src="assets/images/img-1.png" class="img-thumbnail border border-grey rounded-2">
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="p-2">
                                    '.substr($row['content'], 0, 300 ).'… <a href="'.$baseURL.'blog/'.$postCleanURL.'">Read More »</a>
                                    </p>
                                </div>
                            </div>
                        </div>';
                }    

                // show page number with link   
                // Display the next and previous buttons
               echo'
               <div class="d-flex justify-content-center">
               '?>
               <?php
                if ($current_page > 1) {
                    echo '<a style="margin-right:10px" href="?page='.($current_page - 1).'">Previous</a> ';
                }
                for($page_number = 1; $page_number<= $total_pages; $page_number++) {  
                    echo '<a style="margin-right:10px" href="blog.php?page=' . $page_number . '">' . $page_number . ' </a>';  
                }
                
                if ($current_page < $total_pages) {
                    echo '<a style="margin-right:10px" href="?page='.($current_page + 1).'">Next</a> ';
                } ?>
               <?php echo '</div>
               ';   
                ?>

        </div>
    </div>
</div>

<?php include("components/footer.php"); ?>
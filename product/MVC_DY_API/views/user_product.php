
<!-- Courses Start -->
<div class="container-large courses py-8 pb-0 " >
   <div class="container-fluid">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2"></h6>
                <h1 class="display-6 pt-4"> Product </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php foreach ($limit_product_user['Data'] as $key => $value) { ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" style ="height:300px;" src="<?php echo $value->item_image; ?>" alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="">More Detail</a>
                                </div>
                            </div>
                            <div class="text-center p-1 pt-3">
                                <h5 class="mb-4"><?php echo $value->item_name; ?></h5>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner<?php echo $value->item_id; ?></li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                                </ol>
                                <p><?php echo $value->item_desc; ?></p>
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">$<?php echo $value->item_price; ?></div>
                            </div>
                        </div>
                    </div>
                <?php }
                
                    if(count($allproduct_user['Data']) > 0)
                    {
                    
                        $total_record = count($allproduct_user['Data']);
                        $limit = 4;
                        $total_page = ceil($total_record/$limit);

                        echo '<nav aria-label="Page navigation">';
                            echo '<ul class="pagination justify-content-end"> ';
                                if($page > 1){
                                    echo '<li class="page-item"><a class="page-link" href="userproduct?page='.($page - 1).'">Prev</a></li>';
                                }
                                for($i = 1; $i <= $total_page; $i++){

                                    if($i == $page){
                                        $active = "active";
                                    }else{
                                        $active = "";
                                    }

                                    echo '<li class="page-item '.$active.'"><a class="page-link" href="userproduct?page='.$i.'">'.$i.'</a></li>';
                                }

                                if($total_page > $page){
                                    echo '<li class="page-item"><a class="page-link" href="userproduct?page='.($page + 1).'">Next</a></li>';
                                }
                            echo '</ul>';
                        echo '</nav>';
                    };
                ?>

                <!-- <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav> -->

            </div>
        </div>
    </div> 
    <!-- Courses End -->
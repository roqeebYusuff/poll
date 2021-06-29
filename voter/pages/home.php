<?php 
    $title="Home";
    include 'includes/header.php'; 
    
?>
<section class="home" style="background-image: url(http://localhost/poll/voter/img/1.jpg); background-size:cover;">
    <div class="container">
        <div class="hvote js-fullheight align-item-center justify-content-end"> 

                <div class="col-md-10 animate text-center">

                    <div class="icon">
                        <span class="ionicons ion-md-checkmark-circle-outline"></span>
                    </div>

                    <h1>E-Voting</h1>

                    <div class="row justify-content-center">
                        <div class="col-md-7 mb-3">
                            <p>Democracy is about voting and it's about a majority vote. And it's time that we started exercising the Democratic process. Someone struggled for your right to vote. Use it.</p>
                        </div>
                    </div>

                    <p class="bhome">
                        <a href="<?php echo $base_url. 'pages/auth/login.php' ?>" class="btn btn-primary p-3 px-5 py-4 mr-md-2">Vote</a>
                        <a href="<?php echo $base_url?>pages/contact.php" class="btn btn-outline-primary p-3 px-5 py-4 ml-md-2">Know more</a>
                    </p>

                </div>

        </div>
    </div>

</section>
    <!-- Nav bar section -->
    <div class="header">
            <?php
            if(isset($_SESSION['SessionName'])){

                header("location:Freelancer_Dashboard.php");
                
            }
            else{
                include_once("includes/Header.php");
            }
            ?>
        </div>
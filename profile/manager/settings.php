<?php 

    include_once 'header.php';

?>




    <!--  -->
    <main class="main-container">
        <!-- tabs container -->
            <aside class="tabs-container">
                <!-- logo-container -->
                <section class="logo-container">
                    <img src="../../media/logos/favicon.jpg" alt="ostello-logo">
                </section>
                <!-- end of logo container -->


                <!-- tabs -->
                <section class="tabs">
                    <ul class="tab-links">
                        <li class=" tab-item" > 
                            <a href="index.php"> <span> <i class="fas fa-th-large" ></i> </span>   <span>Dashboard</span> </a>
                        </li>
                        <li class="tab-item" > 
                            <a href="tenants.php"><span> <i class="fas fa-users" ></i> </span>   <span>Tenants</span>  </a>
                        </li>
                        <li class="tab-item" > 
                            <a href="rooms.php"> <span> <i class="fas fa-city" ></i> </span>   <span>Rooms</span></a>
                        </li>
                        <li class="active-tab tab-item" > 
                            <a href="settings.php"> <span> <i class="fas fa-cogs" ></i> </span>   <span>Settings</span></a>
                        </li>
                    </ul>
                </section>
                <!-- end of tabs -->
            </aside>
        <!-- End of tabs container -->



        <!-- content-container -->
        <section class="content-container">
            <!-- navbar -->
            <?php include_once 'navbar.php' ?>
            <!--  -->



            <div class="page-content-container">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus provident ipsum libero, hic natus sapiente odit perferendis atque! Sequi, qui vitae saepe excepturi, molestiae consectetur culpa ut placeat exercitationem atque architecto ipsam, obcaecati porro! Laudantium consectetur dolorum laborum, adipisci quod doloribus nobis fugit, accusamus dignissimos, dolorem nemo soluta excepturi ex?</p>
            </div>            
            



        </section>
        <!-- end of content-container -->
    </main>
    
    




















<?php 

    include_once 'footer.php';

?>
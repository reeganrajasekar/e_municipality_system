<?php require("./layout/db.php") ?>
<?php require("./layout/Header.php") ?>
<?php require("./layout/Navbar.php") ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-6 col-xl-6 col-sm-12 col-md-12">
                <div class="stretch-card grid-margin">
                    <div class="card bg-gradient-primary card-img-holder text-white">
                        <div class="card-body">
                            <img src="/assets/images/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Your Total Complaints</i>
                            </h4>
                            <h2 class="mb-5">
                                <?php
                                $userid = $_SESSION["userid"];
                                $sql = "SELECT id from com WHERE userid='$userid'";
                                $result = $conn->query($sql);
                                echo($result->num_rows)
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-sm-12 col-md-12">
                <div class="stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                            <img src="/assets/images/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Total Completed Complaints</i>
                            </h4>
                            <h2 class="mb-5">
                               <?php
                               $date=date_create();
                               $date=date_add($date,date_interval_create_from_date_string("-5 days"));
                               $newdate = date_format($date,"Y-m-d");
                               $sql = "SELECT id FROM com WHERE type='Completed' AND userid='$userid'  order by id DESC";
                               $result = $conn->query($sql);
                               echo($result->num_rows)
                               ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 col-sm-12 col-md-12">
                <div class="stretch-card grid-margin">
                    <div class="card bg-gradient-warning card-img-holder text-white">
                        <div class="card-body">
                            <img src="/assets/images/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Total Rejected Complaints</i>
                            </h4>
                            <h2 class="mb-5">
                               <?php
                               $date=date_create();
                               $date=date_add($date,date_interval_create_from_date_string("-5 days"));
                               $newdate = date_format($date,"Y-m-d");
                               $sql = "SELECT id FROM com WHERE type='Rejected' AND userid='$userid'  order by id DESC";
                               $result = $conn->query($sql);
                               echo($result->num_rows)
                               ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require("./layout/Footer.php") ?>
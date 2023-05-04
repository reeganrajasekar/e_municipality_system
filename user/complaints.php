<?php require("./layout/db.php") ?>
<?php require("./layout/Header.php") ?>
<?php require("./layout/Navbar.php") ?>

<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="text-secondary mb-3" style="display:flex;align-items:center;justify-content:space-between">
            Complaints :&ensp;&ensp;
            <button type="button" class="btn" style="background-color: #b66dff;color:white;padding:10px" data-bs-toggle="modal" data-bs-target="#myModal">
                Add
            </button>
        </h4>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color:#b66dff">Add Complaint :</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="/user/action/add.php" method="post">  
                            <div class="form-floating mb-3 ">
                                <textarea required class="form-control"  rows="3" name="com" placeholder="Type your complaint"></textarea>
                                <label>Complaint</label>
                            </div>
                            <div style="display:flex;justify-content:flex-end">
                                <button class="btn  w-25" style="background-color:#b66dff;color:#fff">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $userid = $_SESSION["userid"];
        $sql = "SELECT * FROM com WHERE userid='$userid' order by id DESC";
        $result = $conn->query($sql);
        $i = 0;
        if ($result->num_rows > 0) {
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered ">
                <thead style="text-align:center">
                    <tr>
                        <th>#</th>
                        <th>Complaint</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        ?>
                    <tr>
                        <td style="text-align:center"><?php echo ($i) ?></td>
                        <td ><?php echo ($row["com"]) ?></td>
                        <td ><?php echo ($row["type"]) ?></td>
                        <td ><?php echo ($row["reg_date"]) ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <?php
        }else{
        ?>
        <h4 class="mt-4 text-center text-secondary">Nothing Found!</h4>
        <?php
        }
        ?>
    </div>
</div>


<?php require("./layout/Footer.php") ?>
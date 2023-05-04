<?php require("./layout/Header.php") ?>
<?php require("./layout/Navbar.php") ?>
<?php require("./layout/db.php") ?>

<div class="main-panel">
    <div class="content-wrapper">
        <h4 class="text-secondary mb-3" style="display:flex;align-items:center;justify-content:space-between">
            Complaints:
        </h4>

        <?php
        $date=date_create();
        $date=date_add($date,date_interval_create_from_date_string("-5 days"));
        $newdate = date_format($date,"Y-m-d");
        $sql = "SELECT * FROM com WHERE type='Local Officer' OR type='We are working on it.' AND reg_date<'$newdate'  order by id DESC";
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
                        <th>Action</th>
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
                        <td>
                            <form action="/admin/action/" method="post">
                                <input type="hidden" name="id" value="<?php echo ($row["id"]) ?>">
                                <select name="type" class="form-select">
                                    <option value="<?php echo ($row["type"]) ?>"><?php echo ($row["type"]) ?></option>
                                    <option value="We are working on it.">We are working on it.</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Rejected">Rejected</option>
                                </select>
                                <br>
                                <button class="btn btn-primary w-100">Update</button>
                            </form>
                        </td>
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
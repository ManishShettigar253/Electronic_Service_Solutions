<div class="content py-5">
    <h3 class="">Our Services</h3>
<hr>
    <div class="container-fluid">
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 gx-2 gy-2">
            <?php 
                $services = $conn->query("SELECT * FROM `service_list` where delete_flag = 0 order by `service` asc");
                while($row = $services->fetch_assoc()):
            ?>
                <div class="col">
                    <div class="callout border-primary rounded-0 shadow">
                        <h3><b><?= $row['service'] ?></b></h3>
                        <div class="form-group">
                            <span class="float-right"><i class="fa fa-tags text-muted"></i> <?= number_format($row['cost'],2) ?></span>
                        </div>
                        <p class="text-muted"><small><?= str_replace("\n","<br/>",$row['description']) ?></small></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php ?>
        </div>
    </div>
</div>
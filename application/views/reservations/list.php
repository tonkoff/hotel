<!-- start: Content -->
<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Dashboard</a></li>
    </ul>


    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white align-justify"></i><span class="break"></span>Striped Table</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <a href="<?php echo base_url('index.php/users/insert')?>" class="btn btn-large btn-success pull-right">Create new user</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Client_id</th>
                        <th>Check in</th>
                        <th>Check out</th>
                        <th>Room ID</th>
                        <th>Special Request</th>
                        <th>Booking time</th>
                        <th>Total cost</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($reservations as $reservation) { ?>
                        <tr>
                            <td>
                                <?php echo $reservation->name; ?>
                            </td>
                            <td>
                                <?php echo $reservation->client_id; ?>
                            </td>
                            <td>
                                <?php echo $reservation->check_in; ?>
                            </td>
                            <td>
                                <?php echo $reservation->check_out; ?>
                            </td>
                            <td>
                                <?php echo $reservation->room_id; ?>
                            </td>
                            <td>
                                <?php echo $reservation->special_request; ?>
                            </td>
                            <td>
                                <?php echo $reservation->booking_time; ?>
                            </td>
                            <td>
                                <?php echo $reservation->total_cost; ?>
                            </td>
                            <td>
                                <?php echo $reservation->status; ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url('index.php/users/update');?>?id=<?php echo $reservation->id;?>">Edit</a> |
                                <a href="<?php echo base_url('index.php/users/delete')?>?id=<?php echo $reservation->id; ?>">DELETE</a>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
                <!--                --><?php //echo $links; ?>

            </div>
        </div>
    </div>

</div><!--/.fluid-container-->
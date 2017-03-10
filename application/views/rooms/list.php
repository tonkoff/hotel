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
                        <th>Room Number</th>
                        <th>Room Type</th>
                        <th>Room Price</th>
                        <th>Room View</th>

<!--                        <th>Actions</th>-->
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($rooms as $room) { ?>
                        <tr>
                            <td>
                                <?php echo $room->room_number; ?>
                            </td>
                            <td>
                                <?php echo $room->room_type; ?>
                            </td>
                            <td>
                                <?php echo $room->room_price; ?>
                            </td>
                            <td>
                                <?php echo $room->room_view; ?>
                            </td>

<!--                            <td>-->
<!--                                <a href="--><?php //echo base_url('index.php/users/update');?><!--?id=--><?php //echo $room->id;?><!--">Edit</a> |-->
<!--                                <a href="--><?php //echo base_url('index.php/users/delete')?><!--?id=--><?php //echo $room->id; ?><!--">DELETE</a>-->
<!--                            </td>-->
                        </tr>
                    <?php } ?>

                    </tbody>
                </table>
<!--                --><?php //echo $links; ?>

            </div>
        </div>
    </div>

</div><!--/.fluid-container-->
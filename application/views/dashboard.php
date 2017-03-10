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

        <!-- start: Content -->

        <div class="row-fluid">

            <div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
                <div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
                <div class="number">854<i class="icon-arrow-up"></i></div>
                <div class="title">visits</div>
                <div class="footer">
                    <a href="#"> read full report</a>
                </div>
            </div>
            <div class="span3 statbox green" onTablet="span6" onDesktop="span3">
                <div class="boxchart">1,2,6,4,0,8,2,4,5,3,1,7,5</div>
                <div class="number">123<i class="icon-arrow-up"></i></div>
                <div class="title">sales</div>
                <div class="footer">
                    <a href="#"> read full report</a>
                </div>
            </div>
            <div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
                <div class="boxchart">5,6,7,2,0,-4,-2,4,8,2,3,3,2</div>
                <div class="number">982<i class="icon-arrow-up"></i></div>
                <div class="title">orders</div>
                <div class="footer">
                    <a href="#"> read full report</a>
                </div>
            </div>
            <div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
                <div class="boxchart">7,2,2,2,1,-4,-2,4,8,,0,3,3,5</div>
                <div class="number">678<i class="icon-arrow-down"></i></div>
                <div class="title">visits</div>
                <div class="footer">
                    <a href="#"> read full report</a>
                </div>
            </div>
        </div>

        <form action="" method="get">
            <div>
                <label for="check_in">Check in</label>
                <input type="date" id="check_in" name="check_in" value="<?php echo $check_in?>"  />
            </div>
            <div>
                <label for="check_out">Check out</label>
                <input type="date" id="check_out" name="check_out" value="<?php echo $check_out?>"  />
            </div>

            <input type="submit" value="Search" />
        </form>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Room Number</th>
                <th>Room Type</th>
                <th>Room Price</th>
                <th>Room View</th>
                <th>Actions</th>
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
                    <td>
                        <a href="<?php echo base_url('index.php/rooms/book');?>?id=<?php echo $room->id;?>&check_in=<?php echo $check_in?>&check_out=<?php echo $check_out?>">Book</a> |
                        <a href="<?php echo base_url('index.php/users/delete')?>?id=<?php echo $room->id; ?>">DELETE</a>
                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>


    </div><!--/.fluid-container-->

    <!-- end: Content -->





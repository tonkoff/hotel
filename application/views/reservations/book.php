<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Dashboard</a></li>
    </ul>


    <form class="form-horizontal" action="" method="post">
        <fieldset>
            <div class="control-group <?php echo (array_key_exists('name', $errors))? 'error' : ''; ?>">
                <label class="control-label" for="name">First Name</label>
                <div class="controls ">
                    <input type="text" class="span6" id="name" name="name" value="<?php echo $_SESSION['client']['first_name']?>" />
                    <p class="help-block"><?php echo (array_key_exists('name', $errors))? $errors['name'] : ''; ?></p>
                </div>
            </div>
            <div class="control-group <?php echo (array_key_exists('name', $errors))? 'error' : ''; ?>">
                <label class="control-label" for="name">Last Name</label>
                <div class="controls ">
                    <input type="text" class="span6" id="name" name="name" value="<?php echo $_SESSION['client']['last_name']?>" />
                    <p class="help-block"><?php echo (array_key_exists('name', $errors))? $errors['name'] : ''; ?></p>
                </div>
            </div>
            <div class="control-group <?php echo (array_key_exists('name', $errors))? 'error' : ''; ?>">
                <label class="control-label" for="check_in">Check in</label>
                <div class="controls ">
                    <input type="date" class="span6" id="check_in" name="check_in"  value="<?php echo $_GET['check_in']?>"  />
                    <p class="help-block"><?php echo (array_key_exists('name', $errors))? $errors['name'] : ''; ?></p>
                </div>
            </div>
            <div class="control-group <?php echo (array_key_exists('name', $errors))? 'error' : ''; ?>">
                <label class="control-label" for="check_out">Check out</label>
                <div class="controls ">
                    <input type="date" class="span6" id="check_out" name="check_out" value="<?php echo $_GET['check_out']?>"   />
                    <p class="help-block"><?php echo (array_key_exists('name', $errors))? $errors['name'] : ''; ?></p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="special_request">Special_request</label>
                <div class="controls">
                    <textarea name="special_request" id="special_request" cols="30" rows="10" class="input-xlarge span12"></textarea>
                    <p class="help-block"></p>
                </div>
            </div>




            <div class="form-actions">
                <input type="submit" name="submit" value="Book" />
                <button type="reset" class="btn">Cancel</button>
            </div>
        </fieldset>
    </form>


</div>



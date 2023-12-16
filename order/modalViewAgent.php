<div class="modal fade bd-example-modal-lg mt-5" id="viewAgent<?php echo $count ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">VIEW AGENT</h5>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="AGENT_CODE">AGENT_CODE</label>
                        <input type="text" class="form-control input-default" id="AGENT_CODE" name="AGENT_CODE" value="<?php echo $row['AGENT_CODE']; ?>" readonly/>
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="AGENT_NAME">AGENT_NAME</label>
                        <input type="text" class="form-control input-default" id="AGENT_NAME" name="AGENT_NAME" value="<?php echo $row['AGENT_NAME']; ?>" readonly/>
                    </div>  
                    <div class="form-group col">
                        <label for="WORKING_AREA">WORKING_AREA</label>
                        <input type="text" class="form-control input-default" name="WORKING_AREA" id="WORKING_AREA" value="<?php echo $row['WORKING_AREA']; ?>" readonly>
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col">  
                        <label for="COMMISSION">COMMISSION</label>  
                        <input type="text" class="form-control input-default" name="COMMISSION" id="COMMISSION" value="<?php echo $row['COMMISSION']; ?>" readonly>
                    </div>  
                    <div class="form-group col">
                        <label for="PHONE_NO">PHONE_NO</label>
                        <input type="text" class="form-control input-default" name="PHONE_NO" id="PHONE_NO" value="<?php echo $row['PHONE_NO'];?>" readonly>
                    </div>
                    <div class=" form-group col">
                        <label for="COUNTRY">COUNTRY</label>
                        <input type="text" class="form-control input-default number" name="COUNTRY" id="COUNTRY" value="<?php echo $row['COUNTRY']; ?>" readonly>
                    </div>
                </div>
            </div>  
            <div class="modal-footer">
                <button type="button" class="btn btn-danger col-md-2" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
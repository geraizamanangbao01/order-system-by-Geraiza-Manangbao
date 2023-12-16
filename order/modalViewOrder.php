<div class="modal fade bd-example-modal-lg mt-5" id="viewOrder<?php echo $count ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">VIEW ORDER</h5>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ORD_NUM">ORD_NUM</label>
                        <input type="text" class="form-control input-default" id="ORD_NUM" name="ORD_NUM" value="<?php echo $row['ORD_NUM']; ?>" readonly/>
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="ORD_AMOUNT">ORD_AMOUNT</label>
                        <input type="text" class="form-control input-default" id="ORD_AMOUNT" name="ORD_AMOUNT" value="<?php echo $row['ORD_AMOUNT']; ?>" readonly/>
                    </div>  
                    <div class="form-group col">
                        <label for="ADVANCE_AMOUNT">ADVANCE_AMOUNT</label>
                        <input type="text" class="form-control input-default" name="ADVANCE_AMOUNT" id="ADVANCE_AMOUNT" value="<?php echo $row['ADVANCE_AMOUNT']; ?>" readonly>
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col">  
                        <label for="ORD_DATE">ORD_DATE</label>  
                        <input type="text" class="form-control input-default" name="ORD_DATE" id="ORD_DATE" value="<?php echo $row['ORD_DATE']; ?>" readonly>
                    </div>
                    <div class=" form-group col">
                        <label for="ORD_DESCRIPTION">ORD_DESCRIPTION</label>
                        <input type="text" class="form-control input-default number" name="ORD_DESCRIPTION" id="ORD_DESCRIPTION" value="<?php echo $row['ORD_DESCRIPTION']; ?>" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="CUST_CODE">CUST_CODE</label>
                        <input type="text" class="form-control input-default" name="CUST_CODE" id="CUST_CODE" value="<?php echo $row['CUST_CODE'];?>" readonly>
                    </div>
                    <div class=" form-group col">
                        <label for="AGENT_CODE">AGENT_CODE</label>
                        <input type="text" class="form-control input-default number" name="AGENT_CODE" id="AGENT_CODE" value="<?php echo $row['AGENT_CODE']; ?>" readonly>
                    </div>
                </div>
            </div>  
            <div class="modal-footer">
                <button type="button" class="btn btn-danger col-md-2" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg mt-5" id="viewCustomer<?php echo $count ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">VIEW CUSTOMER</h5>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="CUST_CODE">CUST_CODE</label>
                        <input type="text" class="form-control input-default" id="CUST_CODE" name="CUST_CODE" value="<?php echo $row['CUST_CODE']; ?>" readonly/>
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="CUST_NAME">CUST_NAME</label>
                        <input type="text" class="form-control input-default" id="CUST_NAME" name="CUST_NAME" value="<?php echo $row['CUST_NAME']; ?>" readonly/>
                    </div>  
                    <div class="form-group col">
                        <label for="CUST_CITY">CUST_CITY</label>
                        <input type="text" class="form-control input-default" name="CUST_CITY" id="CUST_CITY" value="<?php echo $row['CUST_CITY']; ?>" readonly>
                    </div>  
                </div>
                <div class="form-row">
                    <div class="form-group col">  
                        <label for="WORKING_AREA">WORKING_AREA</label>  
                        <input type="text" class="form-control input-default" name="WORKING_AREA" id="WORKING_AREA" value="<?php echo $row['WORKING_AREA']; ?>" readonly>
                    </div>  
                    <div class="form-group col">
                        <label for="CUST_COUNTRY">CUST_COUNTRY</label>
                        <input type="text" class="form-control input-default" name="CUST_COUNTRY" id="CUST_COUNTRY" value="<?php echo $row['CUST_COUNTRY'];?>" readonly>
                    </div>
                    <div class=" form-group col-md-2">
                        <label for="GRADE">GRADE</label>
                        <input type="text" class="form-control input-default number" name="GRADE" id="GRADE" value="<?php echo $row['GRADE']; ?>" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="OPENING_AMT">OPENING_AMT</label>
                        <input type="text" class="form-control input-default" id="OPENING_AMT" name="OPENING_AMT" value="<?php echo $row['OPENING_AMT']; ?>" readonly/>
                    </div>  
                    <div class="form-group col">
                        <label for="RECEIVE_AMT">RECEIVE_AMT</label>
                        <input type="text" class="form-control input-default" id="RECEIVE_AMT" name="RECEIVE_AMT" value="<?php echo $row['RECEIVE_AMT']; ?>" readonly/>
                    </div>
                </div>
                <div class="form-row">  
                    <div class="form-group col">
                        <label for="PAYMENT_AMT">PAYMENT_AMT</label>
                        <input type="text" class="form-control input-default" name="PAYMENT_AMT" id="PAYMENT_AMT" value="<?php echo $row['PAYMENT_AMT']; ?>" readonly>
                    </div>
                    <div class="form-group col">  
                        <label for="OUTSTANDING_AMT">OUTSTANDING_AMT</label>  
                        <input type="text" class="form-control input-default" name="OUTSTANDING_AMT" id="OUTSTANDING_AMT" value="<?php echo $row['OUTSTANDING_AMT']; ?>" readonly>
                    </div>
                </div>
                <div class="form-row"> 
                    <div class="form-group col">
                        <label for="PHONE_NO">PHONE_NO</label>
                        <input type="text" class="form-control input-default" name="PHONE_NO" id="PHONE_NO" value="<?php echo $row['PHONE_NO'];?>" readonly>
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
<div class="modal fade bd-example-modal-lg mt-5" tabindex="-1" role="dialog" aria-hidden="true" id="addOrder">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="addOrder.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">ADD ORDER</h4>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row mb-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control input-default" placeholder="ORD_NUM" name="ORD_NUM" id="ORD_NUM" required>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control input-default" placeholder="ORD_AMOUNT" name="ORD_AMOUNT" id="ORD_AMOUNT" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control input-default" placeholder="ADVANCE_AMOUNT" name="ADVANCE_AMOUNT" id="ADVANCE_AMOUNT" required>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control input-default" placeholder="ORD_DATE" name="ORD_DATE" id="ORD_DATE" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control input-default number" placeholder="ORD_DESCRIPTION" name="ORD_DESCRIPTION" id="ORD_DESCRIPTION" required>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control input-default number" placeholder="AGENT_CODE" name="AGENT_CODE" id="AGENT_CODE" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control input-default" placeholder="CUST_CODE" name="CUST_CODE" id="CUST_CODE" required>
                        </div>
                    </div>  
                </div>
                <div class="dash">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn btn-success col-md-2" onclick="return ConfirmSave();">Submit</button>
                    <button type="reset" class="btn btn btn-danger col-md-2">Clear</button>
                </div>
                <div class="container">
                    <div class="row">
                        <div id="member" class="col-lg-12">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
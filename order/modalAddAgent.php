<div class="modal fade bd-example-modal-lg mt-5" tabindex="-1" role="dialog" aria-hidden="true" id="addAgent">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="addAgent.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">ADD AGENT</h4>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row mb-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control input-default" placeholder="AGENT_CODE" name="AGENT_CODE" id="AGENT_CODE" required>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control input-default" placeholder="AGENT_NAME" name="AGENT_NAME" id="AGENT_NAME" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control input-default" placeholder="WORKING_AREA" name="WORKING_AREA" id="WORKING_AREA" required>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control input-default" placeholder="COMMISSION" name="COMMISSION" id="COMMISSION" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control input-default" placeholder="PHONE_NO" name="PHONE_NO" id="PHONE_NO" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control input-default number" placeholder="COUNTRY" name="COUNTRY" id="COUNTRY" required>
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
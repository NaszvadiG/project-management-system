<div class="main-container">
<div class="row-fluid">
        <div class="span8">
            <div class="widget">
                <div class="widget-header">
                    <div class="title">
                          <span class="fs1" aria-hidden="true" data-icon=""></span> New Project
                    </div>

                </div>
                <div class="widget-body">
                  <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="control-group">
                          <label class="control-label" for="party">
                                Project Name
                          </label>
                          <div class="controls">
                                <input class="span12" name="name" placeholder="" type="text">
                          </div>
                        </div>

            <div class="control-group">
                <label class="control-label" for="starting">Starting Date</label>
                <div class="controls">
                    <input name="starting" id="starting" class="span12" type="text">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="ending">Ending Date</label>
                <div class="controls">
                    <input name="ending" id="ending" class="span12" type="text">
                </div>
            </div>
                                <script>
                $(function() {
                    $("#starting,#ending").datepicker();
                });
            </script>
                        <div class="control-group">
                          <label class="control-label">
                                Total Budget
                          </label>
                          <div class="controls">
                                <input class="span12" name="totalBudget" placeholder="" type="text">
                          </div>
                        </div>
                                <div class="control-group">
				  <label class="control-label" for="ps">
					Project Supervisor
				  </label>
				  <div class="controls">
					<select class="span12" name="ps" id="ps">
					<option value="">Name...</option>
					<option value="1">Tarek Bhai</option>
					<option value="2">Rana Bhai</option>
					</select>
				  </div>
				</div>
            <div class="form-actions no-margin">
              <button type="submit" class="btn btn-info pull-right">
                Submit Project
              </button>
              <div class="clearfix">
              </div>
            </div>
          </form>						
        </div>
    </div>

</div>
</div>
</div>

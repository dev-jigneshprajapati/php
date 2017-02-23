
<!-- Content Wrapper. Contains page content -->
<div class="content-fluid">
	<!-- Content Header (Page header) -->
<!--        <div class="block-header">
                <h1>Recharge Report</h1>
		
	</div>-->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Import Excel Data
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form method="post" name="frm_importExcel"  id="frm_importExcel" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="col-md-3 ">
                                            <input type="file" id="file" name="file" class="form-control" accept=".csv"/>
                                            <a target="_blank" href="<?php echo SERVER_URL."uploads/demofile.csv";?>" download>Download CSV DEMO FILE</a>
                                        </div>
                                        <div class="col-md-3 ">
                                            <input type="submit" id="btnUpload" name="btnUpload"  value="Upload CSV" class="btn btn-flat btn-primary" /> 
                                        </div>
                                    </div>
                                </form>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
</div>

</section>
<!-- Jquery DataTable Plugin Js -->
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("form#frm_importExcel").submit(function(){
        var formData = new FormData($(this)[0]);
        $('.page-loader-wrapper').show();
        $.ajax({
            url: GLOBAL.SERVER_URL + 'adminpanel/uploadExcelFile',
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log(data);
                $('.page-loader-wrapper').hide();
            }
        });

        return false;
    });
});
</script>
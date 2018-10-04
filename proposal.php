
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
      <meta name="author" content="Coderthemes">
      <link rel="shortcut icon" href="assets/images/favicon_1.ico">
      <title>SHEspires</title>
      <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/sweetalert.css" rel="stylesheet" type="text/css">
        <script src="assets/js/sweetalert.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        
   </head><?php include('top.php') ?>
<?php include('show12.php') ?> 
<?php include('connection.php') ?>
 <body class="fixed-left">
      <!-- Begin page -->
      <div id="wrapper">  <div class="content-page">
            <div class="content">
               <div class="container">
                  <br>
                  <br>   <div class="panel panel-border panel-custom">
                     <div class="panel-heading">
                        <center>
                           <h1 class="panel-title">Your Proposal</h1>
                        </center>
                        <br>
                     </div><form class="form-horizontal" method="POST" action="proposal.php" role="form">
<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  $con = mysqli_connect("localhost","unnati","password123","ejanta");
$name= "";
  $phone = "";
  $location="";
  $idea="";

if(isset($_POST['proposal_submit']))
{
if(isset($_POST['name']))
{ 
$name = $_POST['name'];}
if(isset($_POST['phone']))
{
$phone = $_POST['phone'];}
if(isset($_POST['location']))
{
$location = $_POST['location'];}

if(isset($_POST['idea']))
{
$idea = $_POST['idea'];}

    $query="INSERT INTO propdetails (name,phone,location,idea) 
            VALUES('$name', '$phone','$location','$idea')";
         
          #echo ("kala");
      
      mysqli_query($con, $query);

  echo '<script>swal("Good Job!","Proposal Successfully Added","success")</script>'; 

      #header('location: ja.php');
     #echo '<script>swal("Good Job!","Job Successfully Added","success")</script>';
  
  }?>
                        <div class="panel-body">
                           <div class="row">
                              <div class="row">
                                 <div class="clearfix"></div>
                                 <div class="form-group">
                                    <label class="col-md-3 control-label">Name</label>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                       <input type="text" class="form-control" name="name" required >
                                    </div>
                                 </div>
                                 <br>                  
                                 <div class="form-group">
                                    <label class="col-md-3 control-label">Phone No.</label>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                       <input type="number" class="form-control" name="phone" required >
                                    </div>
                                 </div>
                              </div><div class="row">
                                 <div class="clearfix"></div>
                                 <div class="form-group">
                                    <label class="col-md-3 control-label">Location</label>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                       <input type="text" class="form-control" name="location" required >
                                    </div>
                                 </div>
                                 <br>                  
                                 <div class="form-group">
                                    <label class="col-md-3 control-label">Idea</label>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                       <textarea class="form-control" rows="5" name="idea" required></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br>
                           <div class="row"> 
                              <center><button class="btn btn-default btn-rounded waves-effect waves-light" value="submit" name="proposal_submit">Submit</button></center> 
                           </div>
                        </div>
                     </form>  </div>
                    </div>
               <br>  ></div>
            <?php include 'footer.php'; ?>
         </div>
      </div>
      <!-- END wrapper -->
      <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script>
           function showmore() {
            if(document.getElementById('show').style.display=="none")
   document.getElementById('show').style.display = "block";
 else
  document.getElementById('show').style.display ="none";
}
                        </script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>



        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>

<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/jszip.min.js"></script>
<script src="assets/plugins/datatables/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

<script src="assets/pages/datatables.init.js"></script><script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: true,
            scrollX: true,
            scrollCollapse: true,
            paging: true,

        });
    });
    TableManageButtons.init();

</script>


   </body>
</html>

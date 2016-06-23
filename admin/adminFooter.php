    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
      <!-- BOOTSTRAP SCRIPTS -->
       <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    	<script src="../js/jquery.js" type="text/javascript"></script>
	<script src="../js/jquery.dataTables.js" type="text/javascript"></script>
	<script src="../js/dataTables.js" type="text/javascript"></script>
	<script src="../js/dataTables.buttons.min.js" type="text/javascript"></script>
	<script src="../js/buttons.print.min.js" type="text/javascript"></script>
		<script>
	$(document).ready(function(){
    $('#senaraipelajar').DataTable( {
        dom: 'Bfrtip',
        buttons: [
		{
				extend: 'print',
                message: '<center><h1>Senarai Pelajar</h1></center>',
                        exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5 ]
                }
            }
        ]
    });
});
</script>
<script>
	$(document).ready(function(){
    $('#keluarbandar').DataTable( {
        dom: 'Bfrtip',
        buttons: [
		{
				extend: 'print',
                message: '<center><h1>Senarai Pelajar Keluar Bandar</h1></center>',
                        exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
                }
            }
        ]
    });
});
</script>
<script>
	$(document).ready(function(){
    $('#masuklewat').DataTable( {
        dom: 'Bfrtip',
        buttons: [
		{
				extend: 'print',
                message: '<center><h1>Senarai Pelajar Masuk Lewat</h1></center>',
                        exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                }
            }
        ]
    });
});
</script>
<script>
	$(document).ready(function(){
    $('#balikkampung').DataTable( {
        dom: 'Bfrtip',
        buttons: [
		{
				extend: 'print',
                message: '<center><h1>Senarai Pelajar Balik Kampung</h1></center>',
                        exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
                }
            }
        ]
    });
});
</script>
<script>
	$(document).ready(function(){
    $('#pulanglewat').DataTable( {
        dom: 'Bfrtip',
        buttons: [
		{
				extend: 'print',
                message: '<center><h1>Senarai Pelajar Pulang Lewat </h1></center>',
                        exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7]
                }
            }
        ]
    });
});
</script>
   	<script type="text/javascript">
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
	</script>
<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>
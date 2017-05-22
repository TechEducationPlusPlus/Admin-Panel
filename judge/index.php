<!DOCTYPE html>
<html lang="en-us">
   <head>
      <title>Judge data editor</title>
     
      <link rel="stylesheet" href="/ex/css/bootstrap.min.css"/> 
      <link rel="stylesheet" href="/ex/css/jquery.dataTables.min.css"/> 
      <link rel="stylesheet" href="/ex/css/buttons.dataTables.min.css"/> 
      <link rel="stylesheet" href="/ex/css/select.dataTables.min.css"/>
      <link rel="stylesheet" href="/ex/css/responsive.dataTables.min.css"/> 
      
      <style>
        table.dataTable tbody>tr.selected,
        table.dataTable tbody>tr>.selected {
          background-color: #A2D3F6;
        }
      </style>
   </head>
   <body>

    <div class="container">
      <br>
      <table cellpadding="0" cellspacing="0" border="0" class="dataTable table table-striped" id="example">

      </table>
      <br>
    </div>

    <script src="/ex/js/jquery-2.2.3.min.js"></script>
    <script src="/ex/js/bootstrap.min.js"></script>
    <script src="/ex/js/jquery.dataTables.min.js"></script>
    <script src="/ex/js/dataTables.altEditor.free.js"></script>
    <script src="/ex/js/dataTables.buttons.min.js"></script>
    <script src="/ex/js/dataTables.select.min.js"></script>
    <script src="/ex/js/dataTables.responsive.min.js"></script>

    <script>
      $(document).ready(function() {

		var columnDefs = <?php include_once ("./get_columns.php") ?>;

		var dataSet = <?php include_once ("./get_table.php") ?>;

        var myTable;

        myTable = $('#example').DataTable({
          "sPaginationType": "full_numbers",
          data: dataSet,
          columns: columnDefs,
          dom: 'Bfrtip',        // Needs button container
          select: 'single',
          responsive: true,
          altEditor: true,     // Enable altEditor
          buttons: [{
            text: 'Add',
            name: 'add'        // do not change name
          },
          {
            extend: 'selected', // Bind to Selected row
            text: 'Edit',
            name: 'edit'        // do not change name
          },
          {
            extend: 'selected', // Bind to Selected row
            text: 'Delete',
            name: 'delete'      // do not change name
         }]

        });
        
      });
    </script>
	<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/ss/check.php"); ?>
   </body>
</html>

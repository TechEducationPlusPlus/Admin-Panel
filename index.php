<!DOCTYPE html>
<html lang="en-us">
   <head>
      <title>Datatables Alternative Editor</title>
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/> 
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css"/> 
      <link rel="stylesheet" href="https://cdn.datatables.net/select/1.1.2/css/select.dataTables.min.css"/>
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.2/css/responsive.dataTables.min.css"/> 
      
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

    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="js/altEditor/dataTables.altEditor.free.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.1.2/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"></script>

    <script>
      $(document).ready(function() {

		var dataSet = <?php include_once ("./get_table.php") ?>;

		var columnDefs = <?php include_once ("./get_columns.php") ?>;

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

   </body>
</html>

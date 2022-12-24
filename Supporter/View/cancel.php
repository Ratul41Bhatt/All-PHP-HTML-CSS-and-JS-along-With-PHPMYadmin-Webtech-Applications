<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>cancel Order</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
  <body>
    <div class="" >
      <h2 class="text-center"><b>Cancel Order</b></h2><br>
      <button type="button" class="btn btn-success btn-md" style="float:right;margin-bottom: 10px">Cancel</button><br>
      <div class="result">

      </div>
    </div>
  </body>
</html>


<script type="text/javascript">
    $(document).ready(function(){
        // fetch data from table without reload/refresh page
        loadData();
        function loadData(query){
          $.ajax({
            url : "display.php",
            type: "POST",
            chache :false,
            data:{query:query},
            success:function(response){
              $(".result").html(response);
            }
          });  
        }
        // Delete multiple record 
        $(".btn-success").click(function(){
          
          var id = [];
          $(".delete-id:checked").each(function(){
              id.push($(this).val());
              element = this;
          });
          
          if (id.length > 0) {
              if (confirm("Are you sure want to delete this records")) {
                $.ajax({
                    url : "../controller/delete.php",
                    type: "POST",
                    cache:false,
                    data:{deleteId:id},
                    success:function(response){
                      if (response==1) {
                          alert("Record delete successfully");
                          loadData();
                      }else{
                          alert("Some thing went wrong try again");
                      }
                    }
                });
              }
          }else{
            alert("Please select atleast one checkbox");
          }
        });
    });
</script>

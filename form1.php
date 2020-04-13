<?php
require 'includes/init.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $results = $_POST;
  var_dump($_POST['num']);
}
?>
<?php require 'includes/header.php'; ?>

  <div class="container">
    <form method="post">
      <fieldset style="border: 1px solid #337ab7;" class=" rounded p-2">
        <legend class="w-auto">Color</legend>
        <div>
          <label for="color">Color:</label>
          <input id="color" type="color" name="color">
        </div>

        <div>
         
          <label><input type="radio" name="color" value="blue" id="blue"> Blue</label> <br>

          <label><input type="radio" name="color" value="red" id="red">Red</label><br>

          <label><input type="radio" name="color" value="green" id="green">Green</label>
        </div>
      </fieldset> <br>
      
      <div id="select" class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select name="numbers" onchange="javascript:handleSelect(this)" class="form-control" id="exampleFormControlSelect1">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4" >4</option>
      <option value="5" >5</option>
    </select>
  </div>

      <input class="btn btn-primary" type="submit" value="Submit">

  </div>
  </form>

  <script type="text/javascript">
function handleSelect(e)
{ if(e.value == 5){

  let div = document.getElementById('select');
  div.innerHTML="<input class='form-control' type='number' name='num' value='"+e.value+"' >";
  
}
console.log(e.value);
//alert('hello');
//window.location = e.value+".php";
}
</script>

<?php require 'includes/footer.php' ;?>
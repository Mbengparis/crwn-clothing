<?php 
session_start();

$korb = ["apple", "mango", "banana"];
$_SESSION['korb'] = $korb;

$preis = [1, 2];
//var_dump($korb); 
 
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//var_dump($_POST);
   if (isset($_POST['num']) && $_POST['num'] == "0") {
      
     //if (isset($_POST['0'])) {
         
       // array_splice($korb, 1, 1);

//var_dump($korb);
    // }
    
   }else {
       echo 'not set';
   }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Work</title>
</head>
<body>
    <div class="container" >
        <form method="post">
           <table class="table" >
           <thead>
                <tr>
                    <th scope="col">Article</th>
                    <th>Preis</th>
                </tr>
            </thead>
            <tbody>
           <div>
           <?php foreach($korb as $row) :?>
                <tr>
                    <td><?=$row ?> 
              <select id="select" name="num">
               <option value="<?php array_splice($korb, 0, 1); ?> ">0(Leeren)</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
               <option value="<?php echo 'hey'; ?> ">10+</option> 
              
            </select>
            </td>
              </tr>
                <?php endforeach; ?>
           </div>
            </tbody>
           </table>
    
            <button type="submit">send</button>

        </form>
        <script type="text/javascript">
        document.getElementById("select").onclick = function() {
        if (this.selectedIndex == "0") { 
            let korb = <?php  echo json_encode($korb); ?>
            
           
           // window.location.href = '';
            korb.splice(1,1);
            console.log(korb);
            console.log(this.value);
        }   
        
        if (this.selectedIndex == "10") { 
         
        // document.getElementById('select').innerHTML = `
        // <input type="number" min="1" max="100">
        // `;


    //     var option = document.createElement("input");
    //    option.type = "number";
    //     option.value = "mf ";
    // var select = document.getElementById("select");
    // select.appendChild(option);
    
            //window.location.href = '';
            
            console.log(this.value);
        } 
   
    };
</script>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
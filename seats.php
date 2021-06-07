

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<title>Title</title>
</head>
<body>
 <div class="container">
<?php

include('db.php');

$query = mysqli_query($con, "SELECT * FROM trains WHERE id = 36");

while($row = mysqli_fetch_array($query)){
    $seats = $row['viti'];
    echo $seats;

    $str_arr = preg_split ("/\,/", $seats); 
    print_r($str_arr);

    echo "------------";

    $arrayLength = count($str_arr);

    foreach ($str_arr as $food)  {
        ?>
         <select name="viti" id="" class="form-control">
           <option value=""><?php echo $food; ?></option>
    </select>
    <?php
        }

    $i = 0;
        while ($i < $arrayLength)
        {
            
            
            ?>

            <select name="viti" id="" class="form-control">
            <option value="<?php echo $str_arr[$i]; ?>"><?php echo $str_arr[$i]; ?></option>
            </select>

            <?php

            $i++;

        }
}

?>

 </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>





<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="seats.css">
    <title>Seats</title>

    <script type="text/javascript">
        function checkboxlimit(checkgroup, limit) {
            var checkgroup = checkgroup
            var limit = limit
            for (var i = 0; i < checkgroup.length; i++) {
                checkgroup[i].onclick = function() {
                    var checkedcount = 0
                    for (var i = 0; i < checkgroup.length; i++)
                        checkedcount += (checkgroup[i].checked) ? 1 : 0
                    if (checkedcount > limit) {
                        alert("You can only book one seat at a time")
                        this.checked = false
                    }
                }
            }
        }
    </script>



</head>
<div class="plane">


    <form id="seats" name="seats">

        <ol class="cabin fuselage">
            <div class="exit exit--back fuselage">

            </div>
            <li class="row row--1">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="book" id="1A" />
                        <label for="1A">1A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" id="1B" />
                        <label for="1B">1B</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" id="1C" />
                        <label for="1C">1C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" disabled id="1D" />
                        <label for="1D">Occupied</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" id="1E" />
                        <label for="1E">1E</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" id="1F" />
                        <label for="1F">1F</label>
                    </li>
                </ol>
            </li>

            <li class="row row--2">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="2A" />
                        <label for="2A">2A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(2)" id="2B" />
                        <label for="2B">2B</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(3)" id="2C" />
                        <label for="2C">2C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(4)" id="2D" />
                        <label for="2D">2D</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(5)" id="2E" />
                        <label for="2E">2E</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(6)" id="2F" />
                        <label for="2F">2F</label>
                    </li>
                </ol>
            </li>
            <li class="row row--3">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(7)" id="3A" />
                        <label for="3A">3A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(8)" id="3B" />
                        <label for="3B">3B</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(9)" id="3C" />
                        <label for="3C">3C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(10)" id="3D" />
                        <label for="3D">3D</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(11)" id="3E" />
                        <label for="3E">3E</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(12)" id="3F" />
                        <label for="3F">3F</label>
                    </li>
                </ol>
            </li>
            <li class="row row--4">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(13)" id="4A" />
                        <label for="4A">4A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(14)" id="4B" />
                        <label for="4B">4B</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(15)" id="4C" />
                        <label for="4C">4C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(16)" id="4D" />
                        <label for="4D">4D</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(17)" id="4E" />
                        <label for="4E">4E</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(18)" id="4F" />
                        <label for="4F">4F</label>
                    </li>
                </ol>
            </li>
            <li class="row row--5">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(19)" id="5A" />
                        <label for="5A">5A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(20)" id="5B" />
                        <label for="5B">5B</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(21)" id="5C" />
                        <label for="5C">5C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(22)" id="5D" />
                        <label for="5D">5D</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(23)" id="5E" />
                        <label for="5E">5E</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(24)" id="5F" />
                        <label for="5F">5F</label>
                    </li>
                </ol>
            </li>
            <li class="row row--6">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="6A" />
                        <label for="6A">6A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="6B" />
                        <label for="6B">6B</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="6C" />
                        <label for="6C">6C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="6D" />
                        <label for="6D">6D</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="6E" />
                        <label for="6E">6E</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" id="6F" />
                        <label for="6F">6F</label>
                    </li>
                </ol>
            </li>
            <li class="row row--7">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="7A" />
                        <label for="7A">7A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="7B" />
                        <label for="7B">7B</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="7C" />
                        <label for="7C">7C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="7D" />
                        <label for="7D">7D</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="7E" />
                        <label for="7E">7E</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="7F" />
                        <label for="7F">7F</label>
                    </li>
                </ol>
            </li>


            <li class="row row--10">
                <ol class="seats" type="A">
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="10A" />
                        <label for="10A">10A</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="10B" />
                        <label for="10B">10B</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="10C" />
                        <label for="10C">10C</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="10D" />
                        <label for="10D">10D</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="10E" />
                        <label for="10E">10E</label>
                    </li>
                    <li class="seat">
                        <input type="checkbox" name="book" onclick="chkcontrol(0)" id="10F" />
                        <label for="10F">10F</label>
                    </li>
                </ol>
            </li>
        </ol>
    </form>
</div>

<script type="text/javascript">
    //Syntax: checkboxlimit(checkbox_reference, limit)
    checkboxlimit(document.forms.seats.book, 1)
</script>

<body>



</html> -->
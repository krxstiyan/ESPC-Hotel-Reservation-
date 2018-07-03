<?php
    include 'includes/dbh.php';
    include 'includes/getBooked.php';
    include 'includes/bDisplay.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lorem Ipsum Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/myCSS.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <div>
      <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Bookings <span class="sr-only">(current)</span></a></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <div class=""></div>
          </ul>
      </div>
      </nav>
    </div>
    <div class= "bod-bod">
      <div class="v1"></div>
        <div class = "myCont">
            <div>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Name</th> 
                    <th scope="col">In</th>
                    <th scope="col">Out</th>
                    <th scope="col">Rooms</th>
                    </tr>
                </thead>
                    <tbody>
                          <?php
                              $books = new bDisplay();
                              $books-> displayBooked();
                          ?>
                          </tbody>
                </table>
                          <div class = "tfoot">
                               <button type="button" class="bkbtn btn-info" data-toggle="modal" data-target= "#modal">Edit</button>
                               <form class = "delete-pos" action= "includes/delete.php"><button type="submit" class="bkbtn btn-info">Delete</button></form>
                          </div>
                    </div>
                </div>
            </div>
        <div class="modalz fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-contentz">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Booking</h5>
                    <button type="button" class="close" data-dismiss= "modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
              </div>
              <form class = "modal-bodyz"  action = "includes/update-book.php" method ="POST">
                  <div>
                    <label class="col-form-label"> Check In</label>
                    <input class="form-control"  type="date" name = "checkin">
                    <label class="col-form-label"> Check Out</label>
                    <input class="form-control" type="date" name = "checkout">
                    <label class="col-form-label" > Guests</label>
                    <input class="form-control-number" type="number" name = "guest">
                  </div>  
                  <div class = "roomz"> 
                    <label class="def">Rooms</label>
                    <div>
                      <label class="col-form-modal" for="single">Single </label>
                      <select class="selz" name="single">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                      </select>
                      <label class="col-form-modal" for="double">Double </label>
                      <select class="selz" name="double">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                      </select>
                    </div>
                    <div class ="posz">
                      <label  class="col-form-modal" for="queen">Queen </label>
                      <select class="sel1z" name="queen">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                      </select>
                      <label  class="col-form-modal" for="king">King </label>
                      <select class="sel1z"  name="king">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                      </select>
                    </div>
                  </div>
                  <div class="btz">
                    <button type="submit" name="submit" class="btn btn-info">Finish</button>
                </div>
                </div>
              </form>
                </div>
              </div>
             </div>
             </div>
            </div>
          </div>
  </body>
</html>
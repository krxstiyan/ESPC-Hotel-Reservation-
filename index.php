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
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bookings.php">Bookings</a>
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
      <p class = "hotel">LOREM IPSUM HOTEL</p>
      <div class = "reservation" align="center">
        <button type="submit" name ="submit" class="btn btn-info" data-toggle="modal" data-target= "#myModal">Book Now</button>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Booking Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="modal-body" action = "includes/date-book.php" method = "POST">
                <div class="form-group" align="left">
                  <div class = "myfrm">
                    <label class="col-form-modal" for="fname">First Name</label>
                    <input class="my-form-modal" type="text" name="fname">
                  </div>
                  <div class = "myfrm">
                    <label class="col-form-modal" for="lname">Last Name</label>
                    <input class="my-form-modal" type="text" name="lname">
                  </div>
                  <div class = "myfrm">
                    <label class="col-form-modal" for="address">Address</label>
                    <input class="my-form-modal" type="text" name="address">
                  </div>
                  <div class = "myfrm">
                    <label class="col-form-modal" for="contact">Number</label>
                    <input class="my-form-modal" type="text" name="contact">
                  </div>
                  <div class = "myfrm">
                    <label class="col-form-modal" for="email">Email</label>
                    <input class="my-form-modal" type="text" name="email">
                    <div class = "myfrm">                              
                    </div>
                  </div>
                </div>
                <div class="form-group-right" align="left">
                  <div>
                    <label class="col-form-label"> Check In</label>
                    <input class="form-control"  type="date" name = "checkin">
                    <label class="col-form-label"> Check Out</label>
                    <input class="form-control" type="date" name = "checkout">
                    <label class="col-form-label" > Guests</label>
                    <input class="form-control-number" type="number" name = "guest">
                  </div>  
                  <div>
                    <label class="def">Rooms</label>
                    <div>
                      <label class="col-form-modal" for="single">Single </label>
                      <select class="sel" name="single">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                      </select>
                      <label class="col-form-modal" for="double">Double </label>
                      <select class="sel " name="double">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                      </select>
                    </div>
                    <div class ="pos">
                      <label  class="col-form-modal" for="queen">Queen </label>
                      <select class="sel1" name="queen">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                      </select>
                      <label  class="col-form-modal" for="king">King </label>
                      <select class="sel1"  name="king">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="bt">
                  <button type="submit" name="submit" class="btn btn-info">Finish</button>
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


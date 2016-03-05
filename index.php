<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
      <title>UW Plaza</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="js/requests.js"></script>
      <script src="js/main.js"></script>
    </head>
    <body>	

    <div class="container-fluid">
      <div class="jumbotron">
      <div class="row">
      <div class="col-sm-2">
      <img src="EatPlazaLogo2.png" class="img-rounded" alt="Logo" width="263" height="163">
      </div>
      <div class="col-sm-9">
        <div class="bottom_aligner2">
        <h1>Explore Restaurants At the Plaza</h1></div>
      </div>
      <div class="col-sm-1">
            <div class="container">
    <div class="row">
        <br/><br/><br/>
        <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contact" data-original-title>
          Submit Record
        </a>
        <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Submit Record</h4>
                    </div>
                    <form action="#" method="post" accept-charset="utf-8">
                    <div class="modal-body" style="padding: 5px;">
                    	<div class="row">
                    		<div class="col-lg-12 col-md-12 col-sm-12">
                                <p>Please enter where and what you ate, a rating from 1-10, and a short review of what you thought.</p>                                          
                                <div class="btn-group btn-input clearfix">
    						      <button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown">
    						          <span data-bind="label">Select One</span> <span class="caret"></span>
    						      </button>
    						      <ul class="dropdown-menu" role="menu" id="submit-drop">
    						      </ul>
						         </div>
                    	   </div>
                        </div>
                        <div class="row">
                          	
						      <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="Quest ID" placeholder="Dish Name" type="text" id="dish-field" required autofocus />
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <input class="form-control" name="email" placeholder="Quest ID" type="text" id="questid-field" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <input class="form-control" name="subject" placeholder="Rating" type="text" id="rating-field" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea style="resize:vertical;" class="form-control" placeholder="Review..." rows="6" name="comment" id="review-field" required></textarea>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="panel-footer" style="margin-top:-21px;">
                    <input type="submit" class="btn btn-success" value="Send" id="submit-button"/>
                                <!--<span class="glyphicon glyphicon-ok"></span>-->
                    <input type="reset" class="btn btn-danger" value="Clear" id="clear-button"/>
                                <!--<span class="glyphicon glyphicon-remove"></span>-->
                     <button style="float: right;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
     </div>
       
    
</div>
      </div>
      </div>      
      </div>   
    </div>


    <div class="container-fluid"><center>
        <div class="col-sm-2" id="challenge">
            <a href="restaurants.php" class="btn btnC L">
                <strong>A - Panino's Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="restaurants.php" class="btn btnC M">
                <strong>B - Aunty's Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="restaurants.php" class="btn btnC R">
                <strong>C - SOGO Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="restaurants.php" class="btn btnC L">
                <strong>D - Burger King Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="restaurants.php" class="btn btnC M">
                <strong>E - Mel's Diner Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="restaurants.php" class="btn btnC R">
                <strong>F - Chen's Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="restaurants.php" class="btn btnC L">
                <strong>G - Seoul Soul Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="restaurants.php" class="btn btnC M">
                <strong>H - Mr. Sushi Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="restaurants.php" class="btn btnC R">
                <strong>I - Waterloo Star Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="restaurants.php" class="btn btnC L">
                <strong>J - Mongolian Grill Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC M">
                <strong>K - Baba Grill Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC R">
                <strong>L - Molly Bloom's Irish Pub Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC L">
                <strong>M - Do Eat Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC M">
                <strong>N - Nuri Village Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC R">
                <strong>O - Phat Hat Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC L">
                <strong>P - Pho-Nomenon Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC M">
                <strong>Q - William's Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC R">
                <strong>R - East Side Mario's Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC L">
                <strong>S - Subway Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC M">
                <strong>T - Marble Slab Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC R">
                <strong>U - Pita Factory Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC L">
                <strong>V - Grab A Greek Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC M">
                <strong>W - Grace and Healthy Dumplings Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC R">
                <strong>X - Campus Pizza Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="panino.html" class="btn btnC L">
                <strong>Y - Sweet Dreams Challenge</strong><br>
            </a>
        </div>
       
    </center>
    </div>  


    <div class="container-fluid">
    <table class="table table-bordered">
    
  </table>
</div>
<center>
</table>
<br />
<table border="0"><tr><td bgcolor="#f5f5ef" width="20px"></td><td>0% </td>
<td bgcolor="#bbbb77" width="20px" ></td><td>25%   </td>
<td bgcolor="#53c653" width="20px"></td><td>25%   </td>
<td bgcolor="#39ac39" width="20px"></td><td>50%   </td>
<td bgcolor="#267326" width="20px"></td><td>100% </td>
</tr><tr><td colspan="10"><center><h4>Dishes Tried</h4></center></td></tr></table>
</center>
    

    </body>


</html>
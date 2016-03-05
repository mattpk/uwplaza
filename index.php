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
      <img src="EatPlazaLogo2.png" class="img-rounded" alt="Logo" width="100%" height="100%">
      </div>
      <div class="col-sm-8">
        <div class="bottom_aligner2">
        <h1>Explore Restaurants At the Plaza</h1></div>
      </div>
      <div class="col-sm-2">
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
                                <p>Please enter where and what you ate, a rating from 1-10, and a short review of what you thought.<br>
                                Choose a Restaurant from the drop down.</p>                 
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
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=12" class="btn btnC L">
    	        <strong>A - Aunty's Challenge</strong><br>
    	    </a>
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=102" class="btn btnC M">
    	        <strong>B - Baba Grill Challenge</strong><br>
    	    </a>
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=32" class="btn btnC R">
    	        <strong>C - Burger King Challenge</strong><br>
    	    </a>
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=232" class="btn btnC L">
    	        <strong>D - Campus Pizza Challenge</strong><br>
    	    </a>    
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=52" class="btn btnC M">
    	        <strong>E - Chen's Challenge</strong><br>
    	    </a>    
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=122" class="btn btnC R">
    	        <strong>F - Do Eat Challenge</strong><br>
    	    </a>
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=172" class="btn btnC L">
    	        <strong>G - East Side Mario's Challenge</strong><br>
    	    </a>    
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=212" class="btn btnC M">
    	        <strong>H - Grab A Greek Challenge</strong><br>
    	    </a>
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=222" class="btn btnC R">
    	        <strong>I - Grace and Healthy Dumplings Challenge</strong><br>
    	    </a>
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=192" class="btn btnC L">
    	        <strong>J - Marble Slab Challenge</strong><br>
    	    </a>
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=42" class="btn btnC M">
    	        <strong>K - Mel's Diner Challenge</strong><br>
    	    </a>
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=112" class="btn btnC R">
    	        <strong>L - Molly Bloom's Irish Pub Challenge</strong><br>
    	    </a>    
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=92" class="btn btnC L">
    	        <strong>M - Mongolian Grill Challenge</strong><br>
    	    </a>
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=72" class="btn btnC M">
    	        <strong>N - Mr. Sushi Challenge</strong><br>
    	    </a>
    	</div>
    	<div class="col-sm-2" id="challenge">
    	    <a href="eattheplaza.herokuapp.com/restaurant.php?id=132" class="btn btnC R">
    	        <strong>O - Nuri Village Challenge</strong><br>
    	    </a>
    	</div>
        <div class="col-sm-2" id="challenge">
            <a href="eattheplaza.herokuapp.com/restaurant.php?id=2" class="btn btnC L">
                <strong>P - Panino's Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="eattheplaza.herokuapp.com/restaurant.php?id=142" class="btn btnC M">
                <strong>Q - Phat Hat Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="eattheplaza.herokuapp.com/restaurant.php?id=152" class="btn btnC R">
                <strong>R - Pho-Nomenon Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="eattheplaza.herokuapp.com/restaurant.php?id=202" class="btn btnC L">
                <strong>S - Pita Factory Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="eattheplaza.herokuapp.com/restaurant.php?id=62" class="btn btnC M">
                <strong>T - Seoul Soul Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="eattheplaza.herokuapp.com/restaurant.php?id=22" class="btn btnC R">
                <strong>U - SOGO Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="eattheplaza.herokuapp.com/restaurant.php?id=242" class="btn btnC L">
                <strong>V - Sweet Dreams Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="eattheplaza.herokuapp.com/restaurant.php?id=182" class="btn btnC M">
                <strong>W - Subway Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="eattheplaza.herokuapp.com/restaurant.php?id=82" class="btn btnC R">
                <strong>X - Waterloo Star Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-2" id="challenge">
            <a href="eattheplaza.herokuapp.com/restaurant.php?id=162" class="btn btnC L">
                <strong>Y - William's Challenge</strong><br>
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
<table border="0"><tr>
<td bgcolor="#c4ffed" width="20px"></td><td>0% </td>
<td bgcolor="#afefff" width="20px"></td><td>25%   </td>                 
<td bgcolor="#9ddbff" width="20px"></td><td>50%   </td>
<td bgcolor="#b9bcfc" width="20px"></td><td>75%   </td>
<td bgcolor="#cca0ff" width="20px" ></td><td>90%   </td>                 
<td bgcolor="#e47fdf" width="20px"></td><td>100% </td>
</tr><tr><td colspan="10"></td></tr></table>
</center>
<br />
<center><h4>Dishes Tried</h4></center>
    

    </body>


</html>
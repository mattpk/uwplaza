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
                            <h2>Restaurant</h2>                                          
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
                                    <input class="form-control" name="Quest ID" placeholder="Dish Name" type="text" required autofocus />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="email" placeholder="Quest ID" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                    <input class="form-control" name="subject" placeholder="Rating" type="text" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea style="resize:vertical;" class="form-control" placeholder="Review..." rows="6" name="comment" required></textarea>
                                </div>
                            </div>
                        </div>  
                            </div>
                            <script>
						    $( document.body ).on( 'click', '.dropdown-menu li', function( event ) {
						 
						   var $target = $( event.currentTarget );
						 
						   $target.closest( '.btn-group' )
						      .find( '[data-bind="label"]' ).text( $target.text() )
						         .end()
						      .children( '.dropdown-toggle' ).dropdown( 'toggle' );
						 
						   return false;
						 
						});
						    </script>
                        <div class="panel-footer" style="margin-bottom:-14px;">
                            <input type="submit" class="btn btn-success" value="Send"/>
                                <!--<span class="glyphicon glyphicon-ok"></span>-->
                            <input type="reset" class="btn btn-danger" value="Clear" />
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
        <div class="col-sm-4" id="challenge">
            <a href="panino.html" class="btn btnC L">
                <strong>Panino Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-4" id="challenge">
            <a href="panino.html" class="btn btnC M">
                <strong>Panino Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-4" id="challenge">
            <a href="panino.html" class="btn btnC R">
                <strong>Panino Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-4" id="challenge">
            <a href="panino.html" class="btn btnC L">
                <strong>Panino Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-4" id="challenge">
            <a href="panino.html" class="btn btnC M">
                <strong>Panino Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-4" id="challenge">
            <a href="panino.html" class="btn btnC R">
                <strong>Panino Challenge</strong><br>
            </a>    
        </div>
        <div class="col-sm-4" id="challenge">
            <a href="panino.html" class="btn btnC L">
                <strong>Panino Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-4" id="challenge">
            <a href="panino.html" class="btn btnC M">
                <strong>Panino Challenge</strong><br>
            </a>
        </div>
        <div class="col-sm-4" id="challenge">
            <a href="panino.html" class="btn btnC R">
                <strong>Panino Challenge</strong><br>
            </a>    
        </div>
    </center>
    </div>  

    <div class="container-fluid">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>A1</th>
        <th>A2</th>
        <th>A3</th>
        <th>B1</th>
        <th>B2</th>
        <th>B3</th>
        <th>B4</th>
        <th>B5</th>
        <th>B6</th>
        <th>B7</th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
        <th>C6</th>
        <th>C7</th>
        <th>C8</th>
        <th>C9</th>
        <th>C10</th>
        <th>F1</th>
        <th>F2</th>
        <th>F3</th>
        <th>N1</th>
        <th>N2</th>
        <th>N3</th>
        <th>N4</th>
        <th>N5</th>
        <th>N6</th>
        <th>N7</th>
        <th>N8</th>
        <th>P1</th>
        <th>P2</th>
        <th>P3</th>
        <th>P4</th>
        <th>P5</th>
        <th>P6</th>
        <th>P7</th>
        <th>W1</th>
        <th>W2</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>john</td>
        <td bgcolor="red"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td></td>
      </tr>
    </tbody>
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
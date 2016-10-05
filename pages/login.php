<div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="../controller/chk_login.php?login=<?php echo sha1('login'); ?>" method="POST" name="from-login" autocomplete="off">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="form-group">
                                        <p class='fa fa-user'> <a href="?page=<?php echo sha1('register'); ?>">ลงทะเบียน</a></p>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <div class="form-group">   
                                                <input type="submit" name="login-submit" id="login-submit" class="form-control btn-success" value="Log In">

                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <div class=table-responsive>
                        <table class="table table-bordered table-striped"> 
                        <thead> 
                            <tr> 
                                <td></td> 
                                <th>Chrome</th> 
                                <th>Firefox</th>
                                <th>Internet Explorer</th> 
                            </tr> 
                        </thead> 
                        <tbody>  
                            <tr> 
                                <th scope=row>Windows</th> 
                                <td class=text-success><span class="glyphicon glyphicon-ok" aria-hidden=true></span> Supported</td> 
                                <td class=text-success><span class="glyphicon glyphicon-ok" aria-hidden=true></span> Supported</td> 
                                <td class=text-danger><span class="glyphicon glyphicon-remove" aria-hidden=true></span> Not supported</td> 
                            </tr> 
                        </tbody> 
                        </table> 
                    </div>
                </div>
            </div>  
 </div>
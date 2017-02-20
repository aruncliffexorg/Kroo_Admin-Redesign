 <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas" style="display:none;">
                <!-- sidebar: style can be found in sidebar.less -->

      
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo ASSETS?>images/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $this->session->userdata('name');  ?></p>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <ul class="sidebar-menu">
                        <li class="">
                            <a href="<?php echo SITEURL ?>dashboard/main">
                                <img class="exSp img-circle" style="background-color:#FFFFFF" src="<?php echo ASSETS?>images/Anaheim-Ducks.png" width="35px"><span class="teamName">DASHBOARD</span>
                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <aside><!-- <aside class="right-side"> -->

            <div id="message_success_update" style="display:none;background-color: #27C24C;border-radius: 14px;color: #FFFFFF;left: 42%;padding-top: 6px; padding-left:20px; padding-right:20px; position: absolute;top: 63px;"><p id="message_text"><b>Updated Successfully !</b></p></div>
          
               <!--  <a onclick="goBack()" href="javascript:void(0);">
                        <i class="fa fa-arrow-left"></i>
                </a> -->
                <section class="content">

                    <div class="row">

                        <div class="col-xs-12">

                            <div class="panel"> 
                               
                                <div class="panel-body table-responsive" style="margin-top: 15px;">

                                <!--  <div class="round-button" style="position:fixed; top:825px; right:85px; z-index:100;"><div class="round-button-circle"><a href="" class="round-button" data-toggle="modal" data-target="#myModal"><img src="<?php echo ASSETS ?>add.png" style="width:25px;"></a></div></div> -->

                                   <table class="table table-bordered table-striped example1" id="users_list">
                                       <thead>
                                        <tr>
                                            <th class="col-md-1">S.No</th>
                                            <th class="col-md-2">Match Detail</th>
                                            <th class="col-md-1">User Name</th>
                                            <th class="col-md-1">Tickets</th>
                                            <th class="col-md-1">Total Credits</th>
                                            <th class="col-md-1">Status</th>
                                            <th class="col-md-1">Update Date</th>
                                            <th class="col-md-1">Message</th>
                                            <th class="col-md-1">Action</th>
                                             
                                        </tr>
                                       </thead>
                                       <tbody>

                                        <?php 
                                        if(!empty($info)){ $i =1;
                                            foreach($info as $user){

                                                    echo '<tr id="row_'.$user['id'].'">';
                                                        echo '<td class="col-md-1">';
                                                            echo '<p>'.$i.'</p>'; 
                                                        echo '<input type="hidden" value="'.$user['email'].'" id="email'.$user['id'].'">';     
                                                              
                                                        echo '</td>';
                                                      
                                                        echo '<td class="col-md-2">';
                                                            echo '<p id="teams'.$user['id'].'"><b>Match &nbsp;</b>: &nbsp;'.$user['t1name'].'  &nbsp; V/S  &nbsp; '.$user['t2name'].'<br><b>Venue &nbsp;</b>: &nbsp;'.$user['venue'].'<br><b>Country &nbsp;</b>:United States of America<br><b>Date &nbsp;</b>:'.$user['date'].'<br><b>Time &nbsp;</b>:'.$user['time'].' </p>';   
                                                        echo '</td>';


                                                        echo '<td class="col-md-1 ">';
                                                            echo '<p id="user'.$user['id'].'">'.$user['name'].'</p>';   
                                                        echo '</td>';

                                                        echo '<td class="col-md-1 ">';
                                                            echo '<p id="tickets'.$user['id'].'">'.$user['tickets'].'</p>';   
                                                        echo '</td>';


                                                        echo '<td class="col-md-1 ">';
                                                            echo '<p id="total_credits'.$user['id'].'">'.$user['total_credits'].'</p>';   
                                                        echo '</td>';

                                                        echo '<td class="col-md-1 ">';
                                                            echo '<p id="status'.$user['id'].'">'.$user['status'].'</p>';   
                                                        echo '</td>';

                                                        echo '<td class="col-md-1 ">';
                                                            echo '<p id="update_date'.$user['id'].'">'.$user['tdate'].'</p>';   
                                                        echo '</td>';

                                                        echo '<td class="col-md-1 ">';
                                                            echo '<p id="msg'.$user['id'].'">'.$user['msg'].'</p>';   
                                                        echo '</td>'; 



                                                        echo '<td class="col-md-1 ">';
                                                          echo '<p>';
                                                            if($user['status'] =="Pending"  ){
                                                                echo'<button data-id="'.$user['id'].'" id="edit'.$user['id'].'" name="singlebutton" class="btn btn-primary edit-ticketsform-btn" data-toggle="modal" data-target="#myTicketsModal">Edit</button>';
                                                            }else{
                                                                 echo'<button data-id="'.$user['id'].'" id="view'.$user['id'].'" name="singlebutton" class="btn btn-primary view-ticketsform-btn" data-toggle="modal" data-target="#myviewTicketsModal">View</button>';
                                                              }
                                                                     
                                                          echo'</p>';
                                                               
                                                        echo '</td>';
                                                    echo '</tr>';
                                              $i++;  } 
                                            }
                                        ?>

                                       </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->



                <!-- Add game Modal start -->
                  <div class="modal fade" id="myTicketsModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content" style="width: 126%;">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" id="addtickets"></h4>
                        </div>

                      <div class="">


                              <form class="form-horizontal" enctype="multipart/form-data" accept-charset="utf-8" name="ticketsinfo" id="ticketsAdd"  method="post" action="">

                              <fieldset>

                            
                              <legend>

                              </legend>
                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email" style="margin-top: -8px;">Match detail :</label>  
                                <div class="col-md-5">
                                <input type="hidden" name="id" id="ticketsId">
                                 <input type="hidden" name="email" id="emailId">
                                <p id="teams"></p>
                                <div id="login_question_err" class="error"></div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email" style="margin-top: -8px;">User :</label>  
                                <div class="col-md-5">                              
                               <p id="username"></p>
                                <div id="login_question_err" class="error"></div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email" style="margin-top: -8px;">Tickets :</label>  
                                <div class="col-md-5">                              
                               <p id="matchTickets"></p>
                                <div id="login_question_err" class="error"></div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email" style="margin-top: -8px;">Total credits :</label>  
                                <div class="col-md-5">                              
                               <p id="totalCredits"></p>
                                <div id="login_question_err" class="error"></div>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email">Status :</label>  
                                <div class="col-md-9" style="padding-left: 0px;">
                                  <div class="col-md-4">
                                  <select name="status" id="ticketsStatus" class="form-control sponser_class countryclass">
                                    <option value="">select status</opton>
                                    <option value="Approved">Approved</opton>
                                    <option value="Rejected">Rejected</opton>

                                  </select> 
                                  </div>
                                <div id="login_credits_err" class="error"></div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email">Message :</label>  
                                <div class="col-md-5">
                                  <textarea id="message" class="form-control" rows="3" maxlength="500" name="message" > </textarea> 
                                <div id="login_credits_err" class="error"></div>
                                </div>
                              </div> 
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email">Upload :</label>  
                                <div class="col-md-5">                              
                                  <input type ="file" name="userfile" id="img" >  
                                <div style="color: red;">Upload only pdf</div>
                                </div>
                              </div>

                              </fieldset>
                              </form>

                              <div class="form-group" style="margin-left: 3%; margin-top:5px;">

                              </div>

                        </div>
                        <div class="modal-footer" style="text-align: left;">
                          <button class="btn btn-primary"  id="submit_tickets_form" style="width: 75px;" >Save</button>
                      
                          <button type="button" class=" btn btn-default" style="width: 75px; margin-left: 2px;" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div> 
                <!-- Add game modal End----------------> 


                <!-- view game Modal start -->
                  <div class="modal fade" id="myviewTicketsModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content" style="width: 126%;">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title" id="addticketsView"></h4>
                        </div>

                      <div class="">


                              <form class="form-horizontal" enctype="multipart/form-data" accept-charset="utf-8" name="ticketsinfo" id="ticketsView"  method="post" action="">

                              <fieldset>

                            
                              <legend>

                              </legend>
                              <!-- Text input-->
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email" style="margin-top: -8px;">Match detail :</label>  
                                <div class="col-md-5">
                                <input type="hidden" name="id" id="ticketsIdView">
                                 <input type="hidden" name="email" id="emailIdView">
                                <p id="teamsView"></p>
                                <div id="login_question_err" class="error"></div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email" style="margin-top: -8px;">user :</label>  
                                <div class="col-md-5">                              
                               <p id="usernameView"></p>
                                <div id="login_question_err" class="error"></div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email" style="margin-top: -8px;">Tickets :</label>  
                                <div class="col-md-5">                              
                               <p id="matchTicketsView"></p>
                                <div id="login_question_err" class="error"></div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email" style="margin-top: -8px;">Total credits :</label>  
                                <div class="col-md-5">                              
                               <p id="totalCreditsView"></p>
                                <div id="login_question_err" class="error"></div>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email">Status :</label>  
                                <div class="col-md-9" style="padding-left: 0px;">
                                  <div class="col-md-4">
                                  <select name="status" id="ticketsStatus" class="form-control sponser_class countryclass" disabled>
                                    <option value="">select status</opton>
                                    <option value="Approved">Approved</opton>
                                    <option value="Rejected">Rejected</opton>

                                  </select> 
                                  </div>
                                <div id="login_credits_err" class="error"></div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 control-label" for="user_email">Message :</label>  
                                <div class="col-md-5">
                                  <textarea id="messageView" class="form-control" rows="3" maxlength="500" name="message" disabled> </textarea> 
                                <div id="login_credits_err" class="error"></div>
                                </div>
                              </div> 


                              </fieldset>
                              </form>

                              <div class="form-group" style="margin-left: 3%; margin-top:5px;">

                              </div>

                        </div>
                        <div class="modal-footer" style="text-align: left;">
                      
                          <button type="button" class=" btn btn-default" style="width: 75px; margin-left: 2px;" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div> 
                <!-- view game modal End----------------> 




                <div class="footer-main" style="bottom: 0; position: fixed; width: 100%;">
                    Copyright &copy Kroo, 2015
                </div>
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->

<script type="text/javascript">
 
        $(document).on("click","#submit_tickets_form",function(e){ 
                var ticketsid= $('#ticketsId').val(); 
                var message = $('#message').val();
                var ticketsStatus = $('#ticketsStatus').val();
                var img = $('#img').val();
                //alert('Hello');
               // e.preventDefault();
               if(ticketsStatus ==""){
                alert("select status");
               }else{               
                  if(ticketsid !=0){

                    $('.error').html('');               
                    var url   = "<?php echo SITEURL;?>game/update_tickets";
                    var frmdata=new FormData($('form[name="ticketsinfo"]')[0]);

                    $.ajax({
                        data: frmdata,
                        url : url,
                        async: false,
                        type: 'POST',
                        cache: false,
                        contentType: false,
                        processData: false
                    }).success(function(data){ //alert(data);


                          if(typeof data.error!='' && typeof data.error!='undefined'){
                            alert(data.error);
                          }else{
                            $('#msg'+ticketsid).text(message);
                            $('#status'+ticketsid).text(ticketsStatus);
                            $('#myTicketsModal').modal('hide');
                            location.reload();
                            $('#message_success_update').css({'display':''});
                            $('#message_success_update').delay(3000).fadeOut(400);   
                          }
                    });
                  
                }
             }      
          });


      $(document).on("click",".edit-ticketsform-btn",function(e){
          $('form[id="ticketsAdd"]')[0].reset();
          var addtickets ="Tickets"; 
          $('#addtickets').text(addtickets);                                           
          var id = $(this).data("id"); 
          var teams = $('#teams'+id).html();
          $('#ticketsId').val(id); 
          var username = $('#user'+id).text();
          var tickets = $('#tickets'+id).text();
          var totalCredits = $('#total_credits'+id).text();
          var Message = $('#msg'+id).text();
          var status = $('#status'+id).text();
          var email = $('#email'+id).val();

          $('#emailId').val(email);
          $('#teams').html(teams);
          $('#username').text(username);
          $('#matchTickets').text(tickets);
          $('#totalCredits').text(totalCredits);
          $('#message').text(Message);
          $('select[name="status"] option[value="'+status+'"]').attr('selected','selected');


       });


      $(document).on("click",".view-ticketsform-btn",function(e){
          $('form[id="ticketsView"]')[0].reset();
          var addtickets ="Tickets View"; 
          $('#addticketsView').text(addtickets);                                           
          var id = $(this).data("id"); 
          var teams = $('#teams'+id).html();
          $('#ticketsIdView').val(id); 
          var username = $('#user'+id).text();
          var tickets = $('#tickets'+id).text();
          var totalCredits = $('#total_credits'+id).text();
          var Message = $('#msg'+id).text();
          var status = $('#status'+id).text();
          var email = $('#email'+id).val();

          $('#emailIdView').val(email);
          $('#teamsView').html(teams);
          $('#usernameView').text(username);
          $('#matchTicketsView').text(tickets);
          $('#totalCreditsView').text(totalCredits);
          $('#messageView').text(Message);
          $('select[name="status"] option[value="'+status+'"]').attr('selected','selected');


       });      



</script>
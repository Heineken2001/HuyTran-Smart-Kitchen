

<div class="row report__body">
                
                    <div class="mng__title">
                        User Management
                    </div>
                    <div class="col l-12 m-12 c-12" style="border-radius: 20%;">
                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                          <thead>
                            <tr>
                              <th style="color: black; font-weight:bold">No</th>
                              <th style="color: black; font-weight:bold">Name</th>
                              <th style="color: black; font-weight:bold">Email</th>
                              <th style="color: black; font-weight:bold">Location</th>
                              <th style="color: black; font-weight:bold">Contract Code</th>
                              <th style="color: black; font-weight:bold">Gas Bound</th>
                              <th style="color: black; font-weight:bold">Delete Account</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                      <div class="tbl-content">
                        <table cellpadding="0" cellspacing="0" border="0">
                          <tbody>
                            <?php foreach ($users as $key => $value) {?>
                            <tr>
                              <td><?php echo $key + 1?></td>
                              <td><a  style="color: lightgreen; text-decoration:underline" href="<?php echo BASE_URL.'/admin/userinfo/'.$value['ContID']?>"><?php echo $value['FNAME']?></a></td>
                              <td><?php echo $value['EMAIL']?></td>
                              <td><?php echo $value['ADDRESS']?></td>
                              <td><?php echo $value['ContID']?></td>
                              <td id="gasbound">
                                <?php echo $value['GASBOUND']?>
                              </td>
                              <td><a href="<?php echo BASE_URL?>/admin/deleteuser/<?php echo $value['ContID']?>"><button  class="btn btn-log">Delete</button></a></td>
                            </tr>
                            <?php }?>
                            
                          </tbody>
                        </table>
                      </div>
                        
          
        </div>


    </div>
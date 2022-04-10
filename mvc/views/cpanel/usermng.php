<div class="row report__body">
                
                    <div class="mng__title">
                        User Management
                    </div>
                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Location</th>
                              <th>Contract Code</th>
                              <th>Gas Bound</th>
                              <th>Delete Account</th>
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
                              <td><?php echo $value['FNAME']?></td>
                              <td><?php echo $value['EMAIL']?></td>
                              <td><?php echo $value['ADDRESS']?></td>
                              <td><?php echo $value['ContID']?></td>
                              <td><?php echo $value['GASBOUND']?><a href="<?php echo BASE_URL?>/admin/editgasbound/<?php echo $value['ContID']?>" style="margin-left: 5px"><i class="fa-solid fa-pen-to-square"></i></a></td>
                              <td><a href="<?php echo BASE_URL?>/admin/deleteuser/<?php echo $value['ContID']?>"><button  class="btn btn-log">Delete</button></a></td>
                            </tr>
                            <?php }?>
                            
                          </tbody>
                        </table>
                      </div>
                    </section>
            </div>
        </div>


    </div>
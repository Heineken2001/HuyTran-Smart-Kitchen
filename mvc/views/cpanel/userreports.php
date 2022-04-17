

<div class="row report__body">
                
                <div class="mng__title">
                    User Reports
                </div>
                <div class="col l-12 m-12 c-12" style="border-radius: 20%;">
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                      <thead>
                        <tr>
                          <th style="color: black; font-weight:bold; width: 10%;">No</th>
                          <th style="color: black; font-weight:bold">From</th>
                          <th style="color: black; font-weight:bold">Title</th>
                          <th style="color: black; font-weight:bold">Sent Date</th>
                          <th style="color: black; font-weight:bold">Status</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                      <tbody>
                      <?php foreach($all as $key => $value) {?>
                        <?php foreach($users as $key1 => $user) {
                            if($user['ContID'] == $value['ContID']) {?>
                                <tr>
                                <td style="width: 10%;"><?php echo $key + 1?></td>
                                <td><a href="<?php echo BASE_URL.'/admin/userinfo/'.$user['ContID']?>"><?php echo $user['USRNAME']?></a></td>
                                <td><a href="<?php echo BASE_URL.'/admin/details/'.$value['RepID']?>"><?php echo $value['TITLE']?></a></td>
                                <td><?php echo $value['SDATE']?></td>
                                <td><?php if($value['SOLVED'] == 1) {echo 'Solved';} else echo 'Not solved yet'?></td>
                                
                                </tr>
                        <?php }}?>
                    <?php }?>
                        
                      </tbody>
                    </table>
                  </div>
                    
      
    </div>


</div>
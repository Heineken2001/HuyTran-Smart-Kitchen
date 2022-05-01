<div class="grid wide container">
    <div style="text-align:center; margin-top: 0">
        <h1 style="margin-top: 70px">Administrator</h1>
    </div>
    <div class="row room__status__body" style="margin-top: 30px">
            <div class="grid">
                <div class="row">
                    <div class="col l-12 m-12 c-12 room__status__body__list" style="border-radius: 20px; overflow: hidden">
                        <div class="room__status__body__list__title">User Management</div>
                       
                    <div class="tbl-header" style="margin-left: 2.5%; margin-right: 2.5%; border: none">
                        <table cellpadding="0" cellspacing="0" style="width: 100%">
                          <thead>
                            <tr>
                              <th style="width: 15%; color: black; font-weight:bold">No</th>
                              <th style="width: 25%; color: black; font-weight:bold">Name</th>
                              <th style="width: 50%; color: black; font-weight:bold">Email</th>
                              <th style="width: 10%; color: black; font-weight:bold">Report</th>
                            </tr>
                          </thead>
                        </table>
                    </div>
                      <div class="tbl-content" style="border: none; height: 400px; ">
                        <table cellpadding="0" cellspacing="0">
                          <tbody>
                            <?php foreach ($users as $key => $value) {?>
                            <tr>
                              <td style="width: 15%;"><?php echo $key + 1?></td>
                              <td style="width: 25%;"><a style="text-decoration:underline; color: lightgreen" href="<?php echo BASE_URL.'/admin/userinfo/'.$value['ContID']?>"><?php echo $value['FNAME']?></a></td>
                              <td style="width: 50%;"><?php echo $value['EMAIL']?></td>
                              <td style="width: 10%;"><a style="text-decoration:underline; color: lightgreen" href="<?php echo BASE_URL.'/admin/summaryreport/'.$value['ContID']?>">Details</a></td>
                            </tr>
                            <?php }?>
                            
                          </tbody>
                        </table>
                      </div>
                        <div class="charkbtn" style="margin-bottom: 15px; position: relative">
                            <a href="<?php echo BASE_URL ?>/admin/usermanagement"><button class="btn5-hover btn5">Manage</Button></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
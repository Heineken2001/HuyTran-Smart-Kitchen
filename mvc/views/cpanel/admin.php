<div class="grid wide container">
    <div style="text-align:center; margin-top: 0">
        <h1 style="margin-top: 100px">Administrator</h1>
    </div>
    <div class="row room__status__body" style="margin-top: 50px">
            <div class="grid">
                <div class="row">
                    <div class="col l-6 m-6 c-12 room__status__body__list" style="border-radius: 20px;">
                        <div class="room__status__body__list__title">Summary Report</div>
                        <div class="charkbtn">
                            <a href="#"><button class="btn5-hover btn5">Details</Button></a>
                        </div>
                    </div>
                    <div class="col l-6 m-6 c-12 room__status__body__list" style="border-radius: 20px; overflow: hidden">
                        <div class="room__status__body__list__title">User Management</div>
                       
                    <div class="tbl-header" style="margin-left: 15px; margin-right: 15px">
                        <table cellpadding="0" cellspacing="0" style="width: 100%">
                          <thead>
                            <tr>
                              <th style="width: 15%;">No</th>
                              <th style="width: 25%;">Name</th>
                              <th style="width: 60%;">Email</th>
                            </tr>
                          </thead>
                        </table>
                    </div>
                      <div class="tbl-content" style="border: none; height: 400px">
                        <table cellpadding="0" cellspacing="0">
                          <tbody>
                            <?php foreach ($users as $key => $value) {?>
                            <tr>
                              <td style="width: 15%;"><?php echo $key + 1?></td>
                              <td style="width: 25%;"><a href="<?php echo BASE_URL.'/admin/userinfo/'.$value['ContID']?>"><?php echo $value['FNAME']?></a></td>
                              <td style="width: 60%;"><?php echo $value['EMAIL']?></td>
                            </tr>
                            <?php }?>
                            
                          </tbody>
                        </table>
                      </div>
                        <div class="charkbtn">
                            <a href="<?php echo BASE_URL ?>/admin/usermanagement"><button class="btn5-hover btn5">Manage</Button></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
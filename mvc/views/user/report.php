<?php 
    if(!empty($_GET['msg'])) {
        $msg = unserialize(urldecode($_GET['msg']));
        foreach ($msg as $key => $val) {
            echo '<span style="color: red; font-weight: bold;">'.$val.'</span>';
        }
    }
?>

<div class="row report__body">
                
                    <div class="error__title1">
                        Error Report
                    </div>
                    <form action="<?php echo BASE_URL?>/user/reportsent" method="post">
                        <div class="account__info" style="font-size: 1.2rem;">Title: <input type="text" placeholder="Title" class="form__field" name="title"></div>
                        <textarea id="editor" class="error__content" placeholder="Please report the errors here..." name="reportcontent">
                        </textarea>
                        <button type= "submit" class="btn5-hover btn5" style="margin: 0 auto;">Report</button>
                    </form>
            </div>
        </div>


    </div>
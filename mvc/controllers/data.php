<?php
class dataController extends Controller{
    public function viewData($datatype)
    {
        $controller = new Controller();
        if (datatype == "buzzer") {
            $buzzer = new buzzerswitch();
            $buzzer.getdata();
        } else if (datatype == "light") {
            $light = new lightswitch();
            $light.getdata();
        }
    }
}
?>
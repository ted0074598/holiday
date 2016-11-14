<?php
include_once'adminhead.php';
?>

      

        <div id="page-wrapper" style="min-height: 266px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">列表</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
         <div class="row" >
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          配件列表
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>姓名</th>
                                        <th>电话</th>
                                        <th>请假事由</th>
                                        <th>请假开始时间</th>
                                        <th>请假天数</th> 
                                        <th>请假结束时间</th>
                                        <th width="15%">操作管理</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <?php



                                     $query='SELECT * FROM `fofo_holiday`';
                                     $result=$link->query($query);
                                     while ($show=$result->fetch_array(MYSQLI_ASSOC)) 
                                     {
                                            

    echo ' <tr class="odd gradeX">
    <td>'.$show['h_name'].'</td>
    <td>'.$show['h_photo'].'</td>
     <td>'.$show['h_reason'].'</td>
     <td>'.$show['h_time'].'</td>
     <td>'.$show['h_day'].'</td>
     <td>'.$show['h_end_time'].'</td>
     <td>
                            <button type="button" class="xiugai_id btn btn-default" value="'.$show['id'].'">修改</button>&nbsp;
                            <button type="button" class="part_del btn btn-default" value="'.$show['id'].'"> 删除</button>
                            <button type="button" style="display:none;"   id="up_h_id'.$show['id'].'" value="'.$show['id'].'"> </button>  
                            <button type="button" style="display:none;"   id="up_h_name'.$show['id'].'" value="'.$show['h_name'].'"> </button> 
                            <button type="button" style="display:none;"   id="up_h_photo'.$show['id'].'" value="'.$show['h_photo'].'"> </button> 
                            <button type="button" style="display:none;"   id="up_h_reason'.$show['id'].'" value="'.$show['h_reason'].'"> </button> 
                            <button type="button" style="display:none;"   id="up_h_time'.$show['id'].'" value="'.$show['h_time'].'"> </button> 
                            <button type="button" style="display:none;"   id="up_h_day'.$show['id'].'" value="'.$show['h_day'].'"> </button> 
    </td> </tr>';
                                     }
                                     ?>
                                        
                                        
                                   
                                   
                                </tbody>
                             </table>
                            <!-- /.table-responsive -->
                             
                                        <div class="form-group">
                                        <form role="form"  id="fofo" class='cmxform'  method="POST" action="list.php" >
                                             <table id='add_holiday' style="display: none;" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <tbody>
                                                    <tr>
                                                    <td>
                                                        <input id='h_name'  name='h_name' placeholder="姓名" class="form-control">
                                                        <label id="h_name-error"  class="error"  for="h_name"></label>
                                                    </td>
                                                    <td><input id='h_photo' name='h_photo' placeholder="电话"  class="form-control">
                                                            <label id="h_photo-error"  class="error"  for="h_photo"></label>
                                                    </td>
                                                    <td><input id='h_reason' name='h_reason' placeholder="事由"  class="form-control">
                                                            <label id="h_reason-error"  class="error"  for="h_reason"></label>
                                                    </td>
                                                    <td><input id='h_time' name='h_time' placeholder="时间" onClick="WdatePicker()"  class="form-control">
                                                            <label id="h_time-error"  class="error"  for="h_time"></label>
                                                    </td>
                                                    <td><input id='h_day' name='h_day' placeholder="天数"  class="form-control">
                                                            <label id="h_day-error"  class="error"  for="h_day"></label>
                                                    </td>
                                                    <td width="10%"><button  type="submit" class="btn btn-default">确认增加</button></td>
                                                    </tr>

                                               </tbody>  
                                           </table>
                                             </form>
                                            <form role="form"  id="updatpart" class='cmxform'  method="POST" action="list.php" >
                                              <table id='updattable' style="display: none;" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                 <tbody>
                                                    <tr>
                                                    <td><input id='up_id' name='up_id'  style="display: none"  value="">
                                                        <input id='up_name'  name='up_name' placeholder="姓名" class="form-control" value="">
                                                        <label id="up_name-error"  class="error"  for="up_name"></label>
                                                        </td>
                                                    <td><input id='up_photo' name='up_photo' placeholder="电话"  class="form-control" value="">
                                                            <label id="up_photo-error"  class="error"  for="up_photo"></label>
                                                    </td>
                                                    <td><input id='up_reason' name='up_reason' placeholder="事由"  class="form-control" value="">
                                                            <label id="up_reason-error"  class="error"  for="up_reason"></label>
                                                    </td>
                                                    <td><input id='up_time' name='up_time' placeholder="时间" onClick="WdatePicker()"  class="form-control" value="">
                                                            <label id="up_time-error"  class="error"  for="up_time"></label>
                                                    </td>
                                                    <td><input id='up_day' name='up_day' placeholder="天数"  class="form-control" value="">
                                                            <label id="up_day-error"  class="error"  for="up_day"></label>
                                                    </td>
                                                    <td width="15%"><button  type="submit" class="btn btn-default">修改</button>
                                                   </form> 
                                                    <button  class="cance  btn btn-default">取消</button>
                                                  </td>
                                                    </tr>

                                               </tbody>  
                                            </table>
                                         
                                        </div>
                            

                           <button id='add'  class="btn btn-default">增加</button>
                            <button id='quxiao' style="display: none;"   class="btn btn-default">取消增加</button>
                      
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

                            
        </div>
        <!-- /#page-wrapper -->
 </div>
    <!-- /#wrapper -->

<script>
                                
                                   $.validator.setDefaults({
                                        submitHandler: function() {
                                            form.submit();
                                        }
                                    });
</script>   




</body>
</html>
<?php

if(isset($_POST['h_name']))
{
    $h_name=$_POST['h_name'];
    $h_photo=$_POST['h_photo'];
    $h_reason=$_POST['h_reason'];
    $h_time=$_POST['h_time'];
    $h_day=$_POST['h_day'];

    $start_day=strtotime($h_time);
    $end_day=$start_day+$h_day*60*60*24;
    $h_end_time=date('Y-m-d H:i:s',$end_day);

    $query="INSERT INTO `fofo_holiday`( `h_name`, `h_photo`, `h_reason`,`h_time`,`h_day`,`h_end_time`) VALUES ('".$h_name."','".$h_photo."','".$h_reason."','".$h_time."','".$h_day."','".$h_end_time."')";
   
    if($m->insert($query,true))
    {   
            echo "<script>alert('操作成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    }

}

if(isset($_GET['part_id']))
{
    $id=$_GET['part_id'];
    $id='id='.$id; 
    $m=new M();
    if( $m->Del('fofo_holiday',$id))
    {   
            echo "<script>alert('操作成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    }

}
if(isset($_POST['up_id']))
{

/*up_id
up_name
up_photo
up_reason
up_time
up_day*/


        $up_id=$_POST['up_id'];
        $up_id="id=".$up_id;
        $up_name=$_POST['up_name'];
        $up_photo=$_POST['up_photo'];
        $up_reason=$_POST['up_reason'];
        $up_time=$_POST['up_time'];
        $up_day=$_POST['up_day'];
        if($m->Update("fofo_holiday", array('h_name'=> $up_name, 'h_photo'=> $up_photo, 'h_reason'=> $up_reason, 'h_time'=> $up_time, 'h_day'=> $up_day), $up_id))
        {
            echo "<script>alert('操作成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
        }
}
?>

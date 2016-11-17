<?php
include_once'adminhead.php';
?>
<script>
                                
                                   $.validator.setDefaults({
                                        submitHandler: function() {
                                            form.submit();
                                        }
                                    });
</script>   

    <div id="page-wrapper" style="min-height: 266px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">已销假记录</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          单位列表
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>姓名</th>
                                        <th>电话</th>
                                        <th>请假事由</th>
                                        <th>请假结束时间</th>
                                        <th>请假天数</th> 
                                        <th>请假状态</th>
                                        <th width="15%">操作管理</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <?php
                                    
                                    $total2=$m->Total('fofo_holiday','h_stat=0');
                                    $page2=new PHPPage($total2,10);    
                                    $limit =$page2->limit();
                                    $query='SELECT * FROM `fofo_holiday` where h_stat=0  order by h_end_time limit '.$limit;
                                    //echo $query;
                                    $result=$link->query($query);
                                    while ($show=$result->fetch_array(MYSQLI_ASSOC)) 
                                     {
                                         if ($show['h_stat']==0) {
                                             $stat= "已销假";
                                         } else {
                                             $stat= "请假中";
                                         }
        

    echo ' <tr class="odd gradeX">
    <td>'.$show['h_name'].'</td>
    <td>'.$show['h_photo'].'</td>
     <td>'.$show['h_reason'].'</td>
     <td>'.$show['h_end_time'].'</td>
     <td>'.$show['h_day'].'</td>
     <td>'.$stat.'</td>
     <td>
                            
                            <button type="button" class="xiaojia btn btn-default" value="'.$show['id'].'"> 取消销假</button>
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
                                 <?php
                                    echo $page2->show();
                                    ?>
                             </div>
                                     
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
          </div>

<?php
if (isset($_GET['xiaojia'])) {
    $up_id=$_GET['xiaojia'];
    $up_id='id='.$up_id;
    $m=new M();
      if($m->Update("fofo_holiday", array('h_stat'=>'1'), $up_id))
    {
        echo "<script>alert('操作成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    }
    
}

?>

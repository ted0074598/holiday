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
                    <h1 class="page-header">列表</h1>
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
                                        <th width="20%">编号</th>
                                        <th>名称</th>
                                        <th width="10%">操作管理</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <?php
     
                                $limit =$page->limit();
                                $data=$m->FetchAll('fofo_department','id,depart_name','','',$limit);
                                 foreach ($data as $show) { //循环取出数据
                                   
    echo ' <tr class="odd gradeX">
    <td>'.$show['id'].'</td>
    <td>'.$show['depart_name'].'</td>
    <td><button type="button" class="d_xiugai btn btn-default" value="'.$show['id'].'">修改</button>&nbsp;
            <button type="button" class="d_del btn btn-default" value="'.$show['id'].'"> 删除</button>
             <button type="button" style="display:none;"   id="up_d_id'.$show['id'].'" value="'.$show['id'].'"> </button>  
            <button type="button" style="display:none;"   id="up_d_part'.$show['id'].'" value="'.$show['depart_name'].'"> </button> 
    </td>  </tr>';
                                     }
                                     ?>                                        
                                        
                                  
                                   
                                </tbody>
                             </table>
                            <!-- /.table-responsive -->

                             <div class="form-group">
                                 <?php
                                    echo $page->show();
                                    ?>
                             </div>
                                        <div class="form-group">

                                 <form role="form"  id="plus_part" class='cmxform'  method="POST" action="depat.php" >
                                             <table id="deptable" style="display: none;" width="100%" class="table table-striped table-bordered table-hover">
                                                 <tbody>
                                                    <tr>
                                                    <td>
                                                        <input id="dep_id" name="dep_id" value="" style="display: none">
                                                        <input id="dep_name" name="dep_name" placeholder="单位名称" class="form-control">
                                                         <label id="dep_name-error"  class="error"  for="dep_name"></label>
                                                     </td>
                                                     <td width="10%"><button type="submit" class="btn btn-default">确认增加</button></td>
                                                    </tr>

                                               </tbody>  

                                            </table>
                                              </form>
                                         <form role="form"  id="up_depat" name="up_d" class='cmxform'  method="POST" action="depat.php" >
                                              <table id='fofo'  name="fofo" style="display:none;" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                 <tbody>
                                                  <tr>
                                                    <td>
                                                        <input id="upd_id" name="upd_id" value="" style="display: none">
                                                        <input id="upd_name" name="upd_name" placeholder="单位名称" class="form-control">
                                                         <label id="upd_name-error"  class="error"  for="upd_name"></label>
                                                     </td>
                                                     <td width="10%">
                                                     <button  type="submit" class="btn btn-default">修改</button>
                                                    <button class="xiugai_cance_id  btn btn-default">取消</button></td></td>
                                                    </tr>

                                               </tbody>  
                                            </table>
                                         </form>  
      


                                        </div>
                              

                           <button id="adddep" class="btn btn-default">增加单位</button>
                         <button id="quxiaodep"  style="display: none;" class="btn btn-default">取消增加</button>
                        
                                   </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
          </div>

<?php
          
          if(isset($_POST['dep_name']))
          {
             $dep_name=$_POST['dep_name'];
             $query="INSERT INTO `fofo_department`( `depart_name`) VALUES ('".$dep_name."')";
             echo $query;
             if($m->insert( $query,true))
             {
                echo "<script>alert('添加操作成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
             }
          }
        if(isset($_GET['d_id']))
        {
        $d_id=$_GET['d_id'];
        $d_id='id='.$d_id; 
        //echo $d_id;
        if( $m->Del('fofo_department',$d_id))
        {   
                echo "<script>alert('删除操作成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
        }
      }
        if(isset($_POST['upd_id']))
{
        $upd_id=$_POST['upd_id'];
        $upd_id="id=".$upd_id;
        $depart_name=$_POST['upd_name'];
        if($m->Update("fofo_department", array('depart_name'=> $depart_name), $upd_id))
        {
            echo "<script>alert('更新操作成功');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
        }
}
?>

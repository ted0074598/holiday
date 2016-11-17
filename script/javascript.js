$(document).ready(function(){
    

    $('#add').click(function(){
        var $addbotton='#add_holiday';
        $($addbotton).toggle('slow');
        var $link=$(this);
        if($link.text()=='增加')
        {
          $link.text('取    消');
        }else
        {
          $link.text('增    加');
        }
});
  
    $('.cance').click(function(){
                    event.preventDefault();
                    $('#updattable').fadeOut();
                    $('#updattable').fadeOut("slow");
                    $('#updattable').fadeOut(3000);
                  
     })


   $('#quxiao').click(function(){
                    $('#addtable').fadeOut();
                    $('#addtable').fadeOut("slow");
                    $('#addtable').fadeOut(3000);
                    $('#quxiao').fadeOut();
                    $('#quxiao').fadeOut("slow");
                    $('#quxiao').fadeOut(3000);
                  });
     $('#adddep').click(function(){
                    $('#deptable').fadeIn();
                    $('#deptable').fadeIn("slow");
                    $('#deptable').fadeIn(3000);
                    $('#quxiaodep').fadeIn();
                    $('#quxiaodep').fadeIn("slow");
                    $('#quxiaodep').fadeIn(3000);
                  });
   $('#quxiaodep').click(function(){
                    $('#deptable').fadeOut();
                    $('#deptable').fadeOut("slow");
                    $('#deptable').fadeOut(3000);
                    $('#quxiaodep').fadeOut();
                    $('#quxiaodep').fadeOut("slow");
                    $('#quxiaodep').fadeOut(3000);
                  });

$(".radio-inline").change(function() {
          var $selectedvalue = $("input[name='c_state']:checked").val();
         //alert($selectedvalue);
          if ($selectedvalue == 2) {
                    $('#bujian').fadeIn();
                    $('#bujian').fadeIn("slow");
                    $('#bujian').fadeIn(3000);
          }else
          {
                    $('#bujian').fadeOut();
                    $('#bujian').fadeOut("slow");
                    $('#bujian').fadeOut(3000);
          }
        });   

               
    $('.lingqu_id').click(function(){
                          if(confirm("确定机器修好已经领走？")){
                                       if(confirm("确定机器修好已经领走？")){
                                            
                                            var t=$(this).val();
                                            window.location.href='index.php?id='+t;
                                            alert (t+'号机器被领走');
                                       }else
                                       {
                                           refresh();
                                       }
                       }
       });
        

        $('.print_id').click(function(){
                           if(confirm("确认打印"))
                       {

                            var t=$(this).val();
                           // alert (t);
                            window.location.href='work.php?id='+t;
                       }
                       else
                        {
                             refresh();
                       }

       });     

        $('.weixiu_id').click(function(){
                           if(confirm("确认维修"))
                       {

                            var t=$(this).val();
                           // alert (t);
                            window.location.href='doit.php?id='+t;
                       }
                       else
                        {
                             refresh();
                       }

       });   



               $('.part_del').click(function(){
                           if(confirm("确认删除"))
                       {
                            var t=$(this).val();
                            window.location.href='list.php?part_id='+t;
                       }
                       else
                        {
                             refresh();
                       }

       });     
                    $('.xiaojia_id').click(function(){
                           if(confirm("确认销假"))
                       {
                            var t=$(this).val();
                            window.location.href='list.php?xiaojia_id='+t;
                       }
                       else
                        {
                             refresh();
                       }

       });  

                          $('.xiaojia').click(function(){
                           if(confirm("取消销假"))
                       {
                            var t=$(this).val();
                            window.location.href='depat.php?xiaojia='+t;
                       }
                       else
                        {
                             refresh();
                       }

       });  

               $('.d_del').click(function(){
                           if(confirm("确认删除"))
                       {

                            var t=$(this).val();
                            //alert(t);
                            window.location.href='depat.php?d_id='+t;
                       }
                       else
                        {
                             refresh();
                       }

       });     







          jQuery.validator.addMethod("isMobile", function(value, element) {
              var length = value.length;
              var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
              return this.optional(element) || (length == 11 && mobile.test(value));
          }, "请正确填写您的手机号码");




            $("#songxiu").validate({
              errorPlacement: function(error, element) {
    
      $( element )
        .closest( "form" )
          .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
    },
    errorElement: "span",
          rules:{
                          p_name:"required",
                          p_photo:{
                          required : true,
                          digits:true,
                          minlength : 11,
                          isMobile : true
                           },
                           c_fault:{
                            required:true,
                            minlength:10
                           }
                       },    

                     messages: {
                          p_name: "请输入您的名字",
                          p_photo: {
                              required : "请输入手机号",
                              minlength : "确认手机不能小于11个字符",
                              digits:"请输入数字",
                              isMobile : "请正确填写您的手机号码"
                                      },
                          c_fault:{
                            required:"请填写详细的问题所在，方便维修人员修理",
                            minlength:"最少输入10个字符"
                                     }
                         }
               

          });  


              $("#denglu").validate({
              errorPlacement: function(error, element) {
    
      $( element )
        .closest( "form" )
          .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
    },
    errorElement: "span",
          rules:{
                          p_no:"required",
                          p_psw:{
                          required : true,
                           },
                        
                       },    

                     messages: {
                          p_no: "请输入您的用户名",
                          p_psw: {
                              required : "请输入您的密码",
                                      },
                           }
               

          });  



       $("#fofo").validate({
      errorPlacement: function(error, element) {
    
      $( element )
        .closest( "form" )
          .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
    },
    errorElement: "span",
          rules:{
                        h_name:"required",
                        h_photo:{
                          required : true,
                          digits:true,
                          minlength : 11,
                          isMobile : true
                           },
                        h_reason:"required",
                        h_time:"required",
                        h_day:"required",
                      },    

          messages: {
                          h_name: "姓名不能为空",
                           h_photo: {
                              required : "请输入手机号",
                              minlength : "确认手机不能小于11个字符",
                              digits:"请输入数字",
                              isMobile : "请正确填写您的手机号码"
                                      },
                          h_reason: "事由不能为空",
                          h_time: "时间不能为空",
                          h_day:"请输入请假天数",
                    },
               

          });  


          $("#updatpart").validate({
      errorPlacement: function(error, element) {
    
      $( element )
        .closest( "form" )
          .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
    },
    errorElement: "span",
          rules:{
                        up_part:"required",
                        up_brand:"required",
                        up_size:"required",
                        up_price:"required",
                      },    

          messages: {
                          up_part: "部件不能为空",
                          up_brand: "品牌不能为空",
                          up_size: "型号不能为空",
                          up_price: "价格不能为空",
                          
                           }
               

          });  

   $("#plus_part").validate({
      errorPlacement: function(error, element) {
    
      $( element )
        .closest( "form" )
          .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
    },
    errorElement: "span",
          rules:{
                        dep_name:"required",
                       },    

          messages: {
                          dep_name: "名称不能为空",
                           }
               

          });  



            $('.xiugai_id').click(function(){
                    $('#updattable').fadeIn();
                    $('#updattable').fadeIn("slow");
                    $('#updattable').fadeIn(3000); 
                    
                    var t=$(this).val();
                    var id='#up_h_id'+t;
                    var id=$(id).val();

                    var name='#up_h_name'+t;
                    var name=$(name).val();

                    var photo='#up_h_photo'+t;
                    var photo=$(photo).val();

                    var reason='#up_h_reason'+t;
                    var reason=$(reason).val();

                    var time='#up_h_time'+t;
                    var time=$(time).val();

                    var day='#up_h_day'+t;
                    var day=$(day).val();

                    $('#up_id').attr('value',id);
                    $('#up_name').attr('value',name);
                    $('#up_photo').attr('value',photo);
                    $('#up_reason').attr('value',reason);
                    $('#up_time').attr('value',time);
                    $('#up_day').attr('value',day);
                     

                 
     });
             
             

});


$(document).ready(function(){

                    $('.d_xiugai').click(function(){
                      $('#fofo').fadeIn();
                      $('#fofo').fadeIn("slow");
                      $('#fofo').fadeIn(3000); 
                      var t=$(this).val();
                        var t_id='#up_d_id'+t;
                        var t_id=$(t_id).val();
                        var t_part='#up_d_part'+t;
                        var t_part=$(t_part).val();
                        // confirm(t_part);
                        $('#upd_id').attr('value',t_id);
                        $('#upd_name').attr('value',t_part);
                      });



$("#up_depat").validate({
      errorPlacement: function(error, element) {
    
      $( element )
        .closest( "form" )
          .find( "label[for='" + element.attr( "id" ) + "']" )
            .append( error );
    },
    errorElement: "span",
          rules:{
                        upd_name:"required",
                       },    

          messages: {
                          upd_name: "名称不能为空",
                           }
               

          });  

})



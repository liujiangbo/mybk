{include file="public/toper" /}
<div class="layui-tab layui-tab-brief main-tab-container">
    <ul class="layui-tab-title main-tab-title">
      <li class="layui-this">添加下载</li>
      <div class="main-tab-item">下载管理</div>
    </ul>
    <div class="layui-tab-content">
       <form class="layui-form">
        <div class="layui-tab-item layui-show">
          <?php echo Form::select_no_option('category_id','','所属栏目','',$model_category_select_option,'required');?>
          <?php echo Form::input('text','title','','标题','','请输入标题','required');?>
          <?php echo Form::file('image_url','','图片','','','images','','图片','image');?>
          <?php echo Form::file('file_url','','下载文件','','','file','','文件','file');?>
          <?php echo Form::input('text','filename','','文件名','','');?>
          <?php echo Form::date('create_time',date('Y-m-d H:i:s'),'添加时间','默认是当前时间');?>
          <input type="hidden" name="filename" value="">
          <?php echo Form::radio('is_recommend',0,'是否推荐','用于前台推荐调用',array(1=>'是',0=>'否'));?>
          <?php echo Form::radio('is_top',0,'是否置顶','用于前台置顶调用',array(1=>'是',0=>'否'));?>
          <?php echo Form::textarea('description','','文件描述');?>
          <?php echo Form::input('text','url','','链接地址');?>
          <div class="layui-form-item">
            <div class="layui-input-block">
              <button class="layui-btn" lay-submit="" lay-filter="download_add">立即提交</button>
            </div>
          </div>
        </div>   
      </form>
    </div>
</div>
<script type="text/javascript">
layui.use(['element', 'form', 'upload', 'laydate'], function(){
  var element = layui.element()
  ,form = layui.form()
  ,laydate = layui.laydate
  ,jq = layui.jquery;

  //图片上传
  layui.upload({
    url: '<?php echo url("upload/upimage") ?>'
    ,elem:'#image'
    ,before: function(input){
      loading = layer.load(2, {
        shade: [0.2,'#000'] //0.2透明度的白色背景
      });
    }
    ,success: function(res){
      layer.close(loading);
      jq('input[name=image_url]').val(res.path);
      layer.msg(res.msg, {icon: 1, time: 1000});
    }
  });

  //文件上传
  layui.upload({
    url: '<?php echo url("upload/upfile") ?>'
    ,elem:'#file'
    ,before: function(input){
      loading = layer.load(2, {
        shade: [0.2,'#000'] //0.2透明度的白色背景
      });
    }
    ,success: function(res){
      layer.close(loading);
      jq('input[name=file_url]').val(res.path);
      jq('input[name=filename]').val(res.info.name);
      layer.msg(res.msg, {icon: 1, time: 1000});
    }
  }); 
  
  //监听提交
  form.on('submit(download_add)', function(data){
    loading = layer.load(2, {
      shade: [0.2,'#000'] //0.2透明度的白色背景
    });
    var param = data.field;
    jq.post('{:url("download/add")}',param,function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.reload();//do something
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
    return false;
  });
  
})
</script>

{include file="public/footer" /}
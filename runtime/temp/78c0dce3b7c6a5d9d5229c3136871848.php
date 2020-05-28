<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:39:"./template/laozhang/feedback\index.html";i:1556197913;s:38:"./template/laozhang/public\header.html";i:1557141638;s:42:"./template/laozhang/public\breadcrumb.html";i:1526267824;s:38:"./template/laozhang/public\footer.html";i:1557142045;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $seo['title']; ?></title>
	<meta name="keywords" content="<?php echo $seo['keywords']; ?>">
	<meta name="description" content="<?php echo $seo['description']; ?>">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<?php echo $settings['head_html']; ?>
	<link rel="stylesheet" type="text/css" href="__TEMPLATE__laozhang/static/layui/css/layui.css">
	<link rel="stylesheet" type="text/css" href="__TEMPLATE__laozhang/static/css/style.css">
	<script type="text/javascript" src="__TEMPLATE__laozhang/static/layui/layui.js"></script>
	<script src="__TEMPLATE__laozhang/static/js/jquery.min.js"></script>
	<script src="__TEMPLATE__laozhang/static/js/jquery.lazyload.min.js?v=1.9.1"></script>
	<?php echo $settings['site_statistice']; ?>
</head>
<body>
<!-- 头部 开始 -->
<div class="layui-header header trans_3">
<div class="main index_main">
	<a class="logo" href="/"><img src="<?php if($settings['logo']): ?><?php echo $settings['logo']; else: ?>__TEMPLATE__laozhang/static/images/logo-header.png<?php endif; ?>" alt="<?php echo $seo['title']; ?>"></a>
	<ul class="layui-nav" lay-filter="top_nav">
	  	<li class="layui-nav-item home"><a href="/">首页</a></li>
	  	<?php if(is_array($categorys[0][0]) || $categorys[0][0] instanceof \think\Collection): $i = 0; $__LIST__ = $categorys[0][0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($categorys[$vo]['is_menu'] == 1): ?>
	  	<li class="layui-nav-item">
	  		<a href="<?php echo $categorys[$vo]['url']; ?>"><?php echo $categorys[$vo]['name']; ?></a>
	  		<?php if(!(empty($categorys[0][$vo]) || ($categorys[0][$vo] instanceof \think\Collection && $categorys[0][$vo]->isEmpty()))): ?>
			<dl class="layui-nav-child"> <!-- 二级菜单 -->
				<?php if(is_array($categorys[0][$vo]) || $categorys[0][$vo] instanceof \think\Collection): $i = 0; $__LIST__ = $categorys[0][$vo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($categorys[$v]['is_menu'] == 1): ?>
		      	<dd><a href="<?php echo $categorys[$v]['url']; ?>"><?php echo $categorys[$v]['name']; ?></a></dd>
		      	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		    </dl>
			<?php endif; ?>
	  	</li>
	  	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div class="title"><?php echo $settings['site_name']; ?></div>
	<form action="<?php echo url('index/search/search'); ?>" mothod="post" class="head_search trans_3 layui-form">
	  <div class="layui-form-item trans_3">
	  	<span class="close trans_3"><i class="layui-icon">&#x1006;</i> </span>
	    <div class="layui-input-inline trans_3">
	      <select name="model_id">
	      <?php if(is_array($search_model_select) || $search_model_select instanceof \think\Collection): $i = 0; $__LIST__ = $search_model_select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	      	<option value="<?php echo $vo['id']; ?>" <?php if($vo['id'] == 2): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
	      <?php endforeach; endif; else: echo "" ;endif; ?>
	      </select>
	    </div>
	    <input type="text" name="keywords" placeholder="搜索" autocomplete="off" class="search_input trans_3">
	    <button class="layui-btn" lay-submit="" style="display: none;"></button>
	  </div>

	</form>
</div>
</div>
<div class="header_back"></div>
<!-- 头部 结束 -->
<!-- 左边导航 开始 -->
<div class="layui-side layui-bg-black left_nav trans_2">
  <div class="layui-side-scroll">
	<ul class="layui-nav layui-nav-tree"  lay-filter="left_nav">
		<li class="layui-nav-item home"><a href="/">首页</a></li>
	  	<?php if(is_array($categorys[0][0]) || $categorys[0][0] instanceof \think\Collection): $i = 0; $__LIST__ = $categorys[0][0];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($categorys[$vo]['is_menu'] == 1): ?>
	  	<li class="layui-nav-item">
	  		<?php if(!(empty($categorys[0][$vo]) || ($categorys[0][$vo] instanceof \think\Collection && $categorys[0][$vo]->isEmpty()))): ?>
	  		<a href="javascript:void();"><?php echo $categorys[$vo]['name']; ?></a>
			<dl class="layui-nav-child"> <!-- 二级菜单 -->
				<?php if(is_array($categorys[0][$vo]) || $categorys[0][$vo] instanceof \think\Collection): $i = 0; $__LIST__ = $categorys[0][$vo];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($categorys[$v]['is_menu'] == 1): ?>
		      	<dd><a href="<?php echo $categorys[$v]['url']; ?>"><?php echo $categorys[$v]['name']; ?></a></dd>
		      	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		    </dl>
		    <?php else: ?>
		    <a href="<?php echo $categorys[$vo]['url']; ?>"><?php echo $categorys[$vo]['name']; ?></a>
			<?php endif; ?>
	  	</li>
	  	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	</ul>
  </div>
</div>
<div class="left_nav_mask"></div>
<div class="left_nav_btn"><i class="layui-icon">&#xe602;</i></div>
<!-- 左边导航 结束 -->
<!-- 面包屑导航 开始 -->
<div class="main breadcrumb_nav trans_3">
	<span class="layui-breadcrumb" lay-separator="—">
	  <?php echo $breadcrumb; ?>
	</span>
</div>
<!-- 面包屑导航 结束 -->
<div class="main">
	<div class="page_left">	
	<form class="layui-form feedback-form">
		<div class="layui-form-item">
		    <div class="">
		    	<textarea name="content" lay-verify="layedit" autocomplete="off" placeholder="我要留言" class="llayui-textarea layui-hide" id="content"></textarea>
		    </div>
		</div>
		<div class="layui-form-item">
		    <button class="layui-btn" lay-submit="" lay-filter="feedback">提交留言</button>
		</div>
	</form>
	<ul class="feedback_list"> 
	<?php if(is_array($lists) || $lists instanceof \think\Collection): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<li>
			<div class="feedback_member">
			 	<?php if($vo['member_id'] == 0): ?>
			 	<div class="avatar"><i class="layui-icon">&#xe612;</i></div>
			 	<div class="name_date"><p class="name">游客留言</p>
			 	<?php else: ?>
					<div class="avatar"><i class="layui-icon">&#xe612;</i></div>
				<div class="name_date"><p class="name"><?php echo $vo['nickname']; ?></p>
			 	<?php endif; ?>
			 	<p class="date"><?php echo format_datetime($vo['create_time']); ?></p></div>
			 	<div class="feedback_content"><?php echo html_entity_decode($vo['content']) ?></div>
			</div>
			<?php if($vo['reply']): ?>
			<div class="feedback_member feedback_reply">
			 	<div class="avatar"><img src="<?php if($vo['admin_avatar']): ?><?php echo $vo['admin_avatar']; else: ?>__TEMPLATE__laozhang/static/images/laozhang_avatar.png<?php endif; ?>" alt="管理员头像"></div>
				<div class="name_date"><p class="name"><?php if($vo['admin_name']): ?><?php echo $vo['admin_name']; else: ?>小惠<?php endif; ?></p>
			 	<p class="date"><?php echo format_datetime($vo['reply_time']); ?></p></div>
			 	<div class="feedback_content reply_content">回复：<?php echo $vo['reply']; ?></div>
			</div>
			<?php endif; ?>
		</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div id="page"><?php echo $page; ?></div>
	</div>
	<div class="page_right">
		<?php if($settings['stationmaster_name']||$settings['stationmaster_occupation']||$settings['stationmaster_motto']||$settings['stationmaster_qqnet']): ?>
		<div class="about_stationmaster_container">
			<h3>博主信息</h3>
			<ol class="page_right_list trans_3">
				<?php if($settings['stationmaster_name']): ?><li>姓名：<?php echo $settings['stationmaster_name']; ?></li><?php endif; if($settings['stationmaster_occupation']): ?><li>职业：<?php echo $settings['stationmaster_occupation']; ?></li><?php endif; if($settings['stationmaster_motto']): ?><li>座右铭：<?php echo $settings['stationmaster_motto']; ?></li><?php endif; if($settings['stationmaster_qqnet']): ?><li>QQ群：<?php echo $settings['stationmaster_qqnet']; ?> <?php echo $settings['stationmaster_qqnet_code']; ?></li><?php endif; ?>
			</ol>
		</div>
		<?php endif; ?>
		<div class="mobile_qrcode_container" style="display:none;">

			<div class="mobile_qrcode wechat_qrcode trans_3">



			</div>
		</div>
	</div>
	<div class="clear"></div>

	<form class="layui-form feedback-form" id="dl" style="float:left;position: absolute;top: 0%; left: 20%;background-color: gray;height: 160px;display: none">
		<div style="padding-top: 20px;">
			<div class="layui-form-item" >
				<div class="layui-input-inline input-custom-width" style="margin-left: 38px;width: 210px;">
					<input type="text" style="width: 200px;height: 28px;" class="username" name="username" lay-verify="required" placeholder="  用户名" autocomplete="off" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item">
				<div class="layui-input-inline input-custom-width" style="margin-left: 38px;width: 210px;">
					<input type="password" style="width: 200px;height: 28px;" class="pwd" name="password" lay-verify="required" placeholder="  密码" autocomplete="off" class="layui-input">
				</div>
			</div>
			<div class="layui-form-item"  style="padding-bottom: 0px;">
				<div class="layui-input-inline input-custom-width">
					<button class="layui-btn input-custom-width zclogin" lay-submit="" lay-filter="login" style="height: 36px;margin-left: 72px;">注册并登陆</button>
				</div>
			</div>
		</div>
	</form>

</div>
<script type="text/javascript">
	layui.use(['form', 'layedit'], function(){
		$(function(){
			//用户注册并登录
			$('.zclogin').click(function(){
				var username = $('.username').val();
				var pwd = $('.pwd').val();
				$.ajax({
					type:"POST",
					url:'<?php echo url("member/do_other_logins"); ?>',
					data : {nickname :username,pwd:pwd},
					success:function(data) {
						if(data.code == 200){
							layer.close(loading);
							layer.msg(data.msg, {icon: 1, time: 1000}, function(){
								location.reload();//do something
							});
						}else{
							layer.closeAll();
						}
					}
				});
			});
		})
	});
</script>

<script type="text/javascript">
layui.use(['form', 'layedit'], function(){
	var form = layui.form(),
  	layer = layui.layer,
  	layedit = layui.layedit,
  	$ = layui.jquery;

  //创建一个编辑器
  var content = layedit.build('content',{
  	tool: ['face', '|', 'left', 'center', 'right']
    ,height: 150
  });
  //表单验证
  form.verify({
    //编辑器数据同步
    layedit: function(value){
      layedit.sync(content);
      if(layedit.getText(content).length < 1){
        return '至少得 1 个字吧...';
      }
    }

  });
  //监听提交
  form.on('submit(feedback)', function(data){
  	var is_login = false;
  	$.ajax({
  		type:"POST",  
        async:false,  //设置同步请求  
        url:'<?php echo url("member/is_login"); ?>',  
        dataType:'json',  
        success:function(data) {
        	if(data.code == 200){
		        is_login = true;
		    }
        }
  	});
  	if(!is_login){
		$('#dl').show();
//  		var login_iframe = layer.open({
//	        type: 2,
//	        title: '注册并登陆',
//	        shadeClose: true,
//	        shade: false,
//	        maxmin: false, //开启最大化最小化按钮
//	        area: ['350px', '250px'],
//	        content: '<?php echo url("index/member/other_login"); ?>',
//		});
  	}else{
  		loading = layer.load(2, {
	      shade: [0.2,'#000'] //0.2透明度的白色背景
	    });
	    var param = data.field;
	    $.post('<?php echo url("feedback/add"); ?>',param,function(data){
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
  	}
    return false;
  });
});
</script>
<!-- 底部 开始 --> 
<ul class="layui-fixbar">
	
	<li id="fixbar_avatar" class="<?php if(\think\Session::get('member.id') == 0): ?>hidden<?php endif; ?>"><div class="avatar"><i class="layui-icon">&#xe612;</i></div><div class="fixbar_member_info trans_3"><?php echo \think\Session::get('member')['nickname']; ?><span id="logout_btn">退了</span></div></li>

	<li class="layui-icon layui-fixbar-top" id="to_top">&#xe604;</li>
</ul>
<div class="layui-footer footer">
  <div class="main index_main">
    <p><?php echo $settings['copy']; ?></p>
    <p>
      <a href="/Sitemap.xml">网站地图</a>
    </p>
    <?php if($settings['icp']): ?>
    <p class="beian">
    	<!-- <a class="gongan" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=xxxxxxxxxx"><img src="__TEMPLATE__laozhang/static/images/gonganbeian.png" alt="豫公网安备 41019702002232号">豫公网安备 xxxxxxxxxx号</a> -->
    	<a class="icp" target="_blank" href="http://www.miitbeian.gov.cn"><?php echo $settings['icp']; ?></a>
    </p>
    <?php endif; ?>
    <p>
      <a target="_blank" href="http://www.phplaozhang.com">Powered by XhCMS! <?php echo LZ_VERSION; ?></a>
    </p>
  </div>
</div>
<!-- 底部 结束 -->
<script type="text/javascript" charset="utf-8">
$(function() {
    $("img.lazy").lazyload({effect: "fadeIn"});
});
</script>
<script type="text/javascript">
layui.use(['form','element'], function(){
	var layer = layui.layer,
	form = layui.form(),
	element = layui.element(),
	$ = layui.jquery;
  	
	//左边导航点击显示
	$('.left_nav_btn').click(function(){
		$('.left_nav_mask').show();
		$('.left_nav').addClass('left_nav_show');
	});
	//左边导航点击消失
	$('.left_nav_mask').click(function(){
		$('.left_nav').removeClass('left_nav_show');
		$('.left_nav_mask').hide();
	});

	//搜索框特效
	$('.header .head_search .search_input').focus(function(){
		$('.header .head_search').addClass('focus');
		$(this).attr('placeholder','输入关键词搜索');
	});
	/*$(document).click(function(){
		$('.header .head_search').removeClass('focus');
		$('.header .head_search .search_input').attr('placeholder','搜索');
	});
	$('.header .head_search').click(function(e){
		$(this).addClass('focus');
		e.stopPropagation(); 
	});*/
	$('.header .head_search .close').click(function(){
		$('.header .head_search').removeClass('focus');
		$('.header .head_search .search_input').attr('placeholder','搜索');
	});
	//底部会员头像
	$('#fixbar_avatar').click(function(){
		if($('#fixbar_avatar .fixbar_member_info').is(":visible")){
			$('#fixbar_avatar .fixbar_member_info').hide().css({'opacity':0,'right':'70px'});
	        
	    }else{
	        $('#fixbar_avatar .fixbar_member_info').show().animate({'opacity':1,'right':'50px'},50);
	    }
	});
	$('#fixbar_avatar').hover(function(){
		$('#fixbar_avatar .fixbar_member_info').show().animate({'opacity':1,'right':'50px'},50);
	},function(){
		$('#fixbar_avatar .fixbar_member_info').hide().css({'opacity':0,'right':'70px'});
	});
	//退出登陆 
	$("#fixbar_avatar").on('click','#logout_btn',function() {
		loading = layer.load(2, {
	      shade: [0.2,'#000'] //0.2透明度的白色背景
	    });
	    $.post('<?php echo url("member/logout"); ?>',function(data){
	      if(data.code == 200){
	        layer.close(loading);
	        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
	        	$('#fixbar_avatar').hide()
	          //location.reload();//do something
	        });
	      }else{
	        layer.close(loading);
	        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
	      }
	    });
    });
	//回到顶部
	$("#to_top").click(function() {
      $("html,body").animate({scrollTop:0}, 200);
    });
    $(document).scroll(function(){
    	var	scroll_top = $(document).scrollTop();
    	if(scroll_top > 500){
    		$("#to_top").show();
    	}else{
    		$("#to_top").hide(); 
    	}
    }); 
    //底部版权始终在底部 
    /*var win_height = $(window).height();
    var body_height = $('body').height();  
    var footer_height = $('.footer').height();
    if(body_height - win_height < 0){
    	$('.footer').addClass('footer_fixed');
    } */
});
</script>
</body>
</html>
{include file="public/toper" /}
<div class="layui-tab layui-tab-brief main-tab-container">
    <ul class="layui-tab-title main-tab-title">
      <div class="main-tab-item">首页面板</div>
    </ul>
    <div class="layui-tab-content index_panel_container">
        <div class="left">
            <blockquote class="layui-elem-quote">
                <p>系统版本：XhCMS <?php echo LZ_VERSION; ?></p><hr>
                <p>ThinkPHP 版本：<?php echo THINK_VERSION; ?></p><hr>
                <p>服务器系统：<?php echo php_uname('s');  ?></p><hr>
                <p>WEB运行环境：<?php echo function_exists('apache_get_version')?apache_get_version():$_SERVER["SERVER_SOFTWARE"];  ?></p><hr>
                <p>运行PHP版本：<?php echo 'PHP'.phpversion();?></p><hr>
                <p>数据库信息：MySQL&nbsp;<?php echo function_exists('mysql_get_server_info')?mysql_get_server_info():'';?></p><hr>
                <p>上传大小限制：<?php echo ini_get('upload_max_filesize');?></p><hr>
                <p>POST大小限制：<?php echo ini_get('post_max_size');?></p>
            </blockquote>
        </div>
        <div class="right">
            <blockquote class="layui-elem-quote" style="height: 135px">
                <p>系统名称：XhCMS-博客版</p><hr>
                <p>开发作者：小惠</p><hr>
                <p>网站官网： <a target="_blank" href="http://www.mybk.com">http://www.mybk.com</a></p><hr>
            </blockquote>
        </div>

    </div>
</div>
</body>
</html>
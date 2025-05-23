<?php /* Smarty version Smarty-3.1.7, created on 2022-01-22 11:30:58
         compiled from "D:/VR/VR0001/template\edit\lib\pic.lbi" */ ?>
<?php /*%%SmartyHeaderCode:1730561eb7a723344f5-50729345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '090c4d2ecfe233d60baa0c1c3ecb682c22c19c1e' => 
    array (
      0 => 'D:/VR/VR0001/template\\edit\\lib\\pic.lbi',
      1 => 1627120342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1730561eb7a723344f5-50729345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'up_url' => 0,
    '_lang' => 0,
    'plugins' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61eb7a7235d0a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61eb7a7235d0a')) {function content_61eb7a7235d0a($_smarty_tpl) {?><script>
    var up_url = '<?php echo $_smarty_tpl->tpl_vars['up_url']->value;?>
';
    var global_storage ='<?php echo $_smarty_tpl->tpl_vars['_lang']->value['global_storage'];?>
';
</script>
<script language="JavaScript" type="text/javascript" src="/static/js/datetimepicker.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/kr/main_edit.js?v=121801"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/kr/polygonHotSpot.js?v=1.5"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/kr/video_patch.js?v=103102"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/jquery-ui.js"></script>
<script language="JavaScript" type="text/javascript" src="/tour/tour.js"></script>
 <script language="JavaScript" type="text/javascript" src="/static/js/bootstrap-slider.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/jquery.qrcode-0.12.0.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/jquery.rotate.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/jquery.zclip.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/pager.js"></script>
<link href="/static/css/datetimepicker.css" rel="stylesheet">
<link href="/static/css/zui.imgcutter.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/static/css/bootstrap-slider.min.css">

<div class="works-container">
<div class="container container_works" style="margin-top: 0;">
    <div class="row">
        <div class="col-md-10">
            <ol class="breadcrumb clear_padding_left">
                <li><a href="/member/project"><i class="icon icon-home"></i>&nbsp;作品列表</a></li>
                <li><a id="atlasname" href=""></a></li>
                <li id="worksnameshow" class="active"></li>
            </ol>
        </div>
    </div>

    <div class="row row_margin_bottom" style="margin-top: 0px;">
        <div class="col-md-10 advanced-setting-block" style="padding-top:10px;padding-bottom:10px;">
            <div class="row">
                <div class="col-md-3">
                    <img id="thumbpath" width="250" height="250" class="img-responsive" src="">
                    <div class="col-md-12 row_margin_bottom" style="padding: 0">
                        <!-- <input id="picUpload" name="file" type="file" class="file-loading"> -->
                        <button type="button" id="workCover" data-imgtype="custom" data-usetype="workCover" data-modalid="#media_icon" class="btn btn-block">从素材库选择封面</button>
                        <span class="help-block"><strong class="text-warning">450 X 450</strong> 像素以上，大小不超过 <strong class="text-warning">2mb</strong> 支持格式: <strong class="text-warning">JPG / PNG / JPEG / GIF</strong></span>
                    </div>
                    <div id="errorMsgDiv" class="col-md-12 text-danger" style="padding: 0;display: none">
                        <i class="icon icon-exclamation-sign"></i>
                        <span id="errorMsg"></span>
                    </div>

                </div>
                <div class="col-md-9">
                    <form class="form-horizontal" method="post" role="form">
                        <div class="form-group">

                            <label class="col-md-2 control-label">作品标题</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="worksname" name="workname" placeholder="请输入全景作品名称" maxlength="100">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">作品介绍</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="4" id="workcomment" name="workcomment" placeholder="请输入全景作品简介" maxlength="800"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">标签</label>
                            <div class="col-md-10">
                                 <select data-placeholder="请选择3个以内的标签" id="pic_chosen" class="chosen-select form-control" tabindex="-1" multiple="">
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-2">
            <div class="btn_fixed_works">
                <button class="btn btn-block btn-primary" onclick="updateWorks()" type="button">保存</button>
                <button class="btn btn-block advanced-setting-btn" type="button" onclick="previewPano()">预览</button>
            </div>
        </div>
    </div>

	<div class="row">	
	<ul class="nav nav-tabs col-md-10 idTabs">
	  <li class="active"><a href="javascript" data-target="#globalset" data-toggle="tab"><h3>全景设置</h3></a></li>
	  <li><a href="javascript" data-target="#functionset" data-toggle="tab"><h3>功能启用</h3></a></li>
	</ul>
	</div>

    <div class="row">
        <div class="col-md-10 advanced-setting-block" style="padding-top:10px;border-top:0 none;">
			<style>
				#option_group .col-md-4{
					height: 45px;
				}
				#option_group .col-md-4 label{
					line-height: 30px;
					text-align: right;
				}
				.idTabs>li>a{
					padding:0 15px;
				}
				.tab-content{
					border:0;
					padding:15px 0;
				}
				#setting_group .text-center .btn{
					width:130px;
					float:left;
					margin:0 8px 20px;
				}
			</style>
	
			<div class="tab-content">
			  <div class="tab-pane fade active in" id="globalset">
					 <div class="form-group" id="setting_group">
						<div class="col-md-12 text-center">
								<button type="button" class="btn btn-primary" data-toggle="tooltip" title="可对全景进行视角、热点、特效等设置" onclick="openPanoSetting()">
									可视化编辑
								</button>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['v']->value['enable']==1&&$_smarty_tpl->tpl_vars['v']->value['edit_container']=="setting_group"){?>
										<?php echo $_smarty_tpl->getSubTemplate ("plugin/".($_smarty_tpl->tpl_vars['k']->value)."/template/edit.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									<?php }?>
								<?php } ?>
						</div>
					</div>
			  </div>
			  <div class="tab-pane fade" id="functionset">
					 <div class="row" id="option_group">
						<div class="col-md-4">
							<label class="col-md-6 control-label">发布全景</label>
							<div class="col-md-6" data-toggle="tooltip" title="若不想作品被浏览，可选择不发布该作品">
								<input id="flag_publish" name="switch_checkbox" class="form-control" type="checkbox"/>
							</div>
						</div>
						<div class="col-md-4">
							 <label class="col-md-6 control-label">场景选择</label>
							<div class="col-md-6" data-toggle="tooltip" title="设置是否自动打开全景列表">
								<input id="scenechoose" name="switch_checkbox" class="form-control" type="checkbox"/>
							</div>
						</div>
						<div class="col-md-4">
							  <label class="col-md-6 control-label">自动旋转</label>
							<div class="col-md-6" data-toggle="tooltip" title="全景会自动旋转">
								<input id="autorotate" name="switch_checkbox" class="form-control" type="checkbox"/>
							</div>
						</div>
						<div class="col-md-4">
							 <label class="col-md-6 control-label">小行星开场</label>
							 <div class="col-md-6" data-toggle="tooltip" title="开场时以小行星视角进入">
								<input id="littleplanet" name="switch_checkbox" class="form-control" type="checkbox"/>
							</div>
						</div>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['v']->value['enable']==1&&$_smarty_tpl->tpl_vars['v']->value['edit_container']=="option_group"){?>
									<?php echo $_smarty_tpl->getSubTemplate ("plugin/".($_smarty_tpl->tpl_vars['k']->value)."/template/edit.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

								<?php }?>
						<?php } ?>
					</div>
			  </div>
			</div>
    	</div>
    </div>

    <h3>选择全景
        <small>共1个全景</small>
    </h3>

    <div class="row">
        <div class="col-md-10 advanced-setting-block">
            <div class="row row_margin_bottom">
                <div class="col-md-3">
                    <button type="button" class="btn advanced-setting-btn btn-block" onclick="addSceneClick()"><i class="icon icon-plus"></i> 从素材库添加全景
                    </button>
                    <div class="modal fade" id="myLgModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
                                    <h2 class="modal-title"> 从素材库添加全景</h2>
                                </div>
                                <div class="modal-body" id="panoImgList">
                                    <div id="panoImgList_wrap"></div>
                                    <div id="pager_wrap"></div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="modal-footer">
                                    <span>已选择<em>0</em>个场景</span><input id="search" onkeyup="searchOnPage()" type="text" placeholder="输入作品名，快速检索">
                                    <button class="btn btn-primary" type="button" onclick="saveWorkImg()">确认</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="pics">
            </div>
        </div>
    </div>

    <h3>作品使用和分享</h3>

    <div class="row">
        <div class="col-md-10 advanced-setting-block" style="padding-top:10px">
            <form class="form-horizontal" method="post" role="form">
                <div class="form-group">
                    <label class="col-md-2 control-label"><a id = "workslocationA" target="_blank">作品地址</a></label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="workslocation"  name="workname" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <button class="btn copyable" type="button">复制</button>
                   </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">嵌入到网站</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="website" name="workname" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <button class="btn copyable" type="button">复制</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">嵌入到论坛</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="forum" name="workname" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <button class="btn copyable" type="button">复制</button>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-2"><span style="padding-left: 5px;margin-top: 5px;display: inline-block;" class="text-muted">复制本段代码，进入论坛的发帖页面，在编辑框中粘贴本段代码即可</span></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">二维码分享</label>
                    <div class="col-md-3 ">
                        <img src="" id="qrimg">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
</div>
<div class="modal fade" id="media_icon" data-backdrop="static" data-keyboard="false" data-position="5%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#music" data-toggle="tab" id="music_tab">音乐</a></li>
                    <li><a href="#pic" data-toggle="tab" class="img_tab">图片</a></li>
                    <li><a href="#upload" data-toggle="tab" id="upload_tab">上传</a></li>
                    <li class="find"><input type="text" id="searchMediaInput" placeholder="输入文件名，快速搜素" class="form-control"></li>
                    <div class="btn_confirm">
                        <li>
                            <button class="btn btn-primary confirm-choose" type="button" onclick="chooseMediaResImg()">确定选择</button>
                        </li>
                        <li>
                            <button class="btn" type="button" id="cancel_icon" data-dismiss="modal">取消
                            </button>
                        </li>
                    </div>
                </ul>
                <div id="myTabContent" class="tab-content" style="height:410px;overflow: auto;">
                    <div class="tab-pane fade in active clearfix" id="music">

                    </div>
                    <div class="tab-pane fade clearfix" id="pic">

                    </div>
                    <div class="tab-pane fade" id="upload">
                       <input id="imgUpload" name="file" type="file" class="" accept="image/*,audio/*">
                        <p id="mediaTyPrompt">上传文件格式：音乐：MP3格式，图片：png、jpg格式。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="modal_obj" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
                <h3></h3>
            </div>
            <div class="modal-body">
              <div class="row" id="object_list">
                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['v']->value['enable']==1&&$_smarty_tpl->tpl_vars['v']->value['edit_resource']==1){?>
        <?php echo $_smarty_tpl->getSubTemplate ("plugin/".($_smarty_tpl->tpl_vars['k']->value)."/template/edit_resource.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
<?php } ?>

<div class="modal fade" id="panoSettingModal" data-backdrop="static" data-keyboard="false" style="padding: 15px; -webkit-user-select: none; display: none;" aria-hidden="true">
    <div style="width:100%;height:100%;position:relative">
        <div class="square_eye" style="display: none;">
            <div class="left_bottom"></div>
            <div class="right_top"></div>
            <button type="button" class="btn btn-primary" onclick="setInitView()">设为初始视角</button>
        </div>
        <div class="pano-setting-container-save">
            <div class="btn-group">
                <button class="btn btn-primary" onclick="savePanoSetting()">保存</button>
                <button class="btn btn-primary advanced-setting-background" data-dismiss="modal">关闭</button>
            </div>
        </div>
        <div class="pano-setting-container">
            <div class="btn-group btn-group-vertical" style="display:block">
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-eye-open"></i> 视角</button>
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-bullseye"></i> 热点</button>
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-flag"></i> 沙盘</button>
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-spinner"></i> 特效</button>
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-map-marker"></i> 导览</button>
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-play-circle"></i> 贴片</button>
            </div>
        </div>
        <div class="pano-setting-content">
            <div class="eyes advanced-setting-background" style="right: -320px;">
                <ul class="nav nav-tabs">
                    <li class="active" style="width:33.33333%">
                        <a href="#keep_eye" data-toggle="tab">
                            初始化视角
                        </a>
                    </li>
                    <li style="width:33.33333%"><a href="#first_eye" data-toggle="tab">
                        FOV设置
                    </a></li>
                    <li style="width:33.33333%"><a href="#vertical_eye" data-toggle="tab">
                        垂直视角
                    </a></li>
                </ul>

               <div class="tab-content">
                    <div class="tab-pane fade in active" id="keep_eye">
                        <img src="">
                        <p><input type="checkbox">自动巡游时保持初始视角</p>
                    </div>
                    <div class="tab-pane fade" id="first_eye">
                        <input type="text" class="form-control" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" style="width:60px;display: inline-block;text-align: center;ime-mode:disabled" value="90" onblur="fovOnBlur(this)">
                        <p class="start_eye">视域范围</p>
                        <div>
                            <b>5&nbsp;&nbsp;</b> <input id="ex1" type="text" class="span2" value="" data-slider-min="5" data-slider-max="120" data-slider-step="1" data-slider-value="80"/> <b>&nbsp;&nbsp;120</b>
                        </div>
                        <div>
                            <b>5&nbsp;&nbsp;</b> <input id="ex2" type="text" class="span2" value="" data-slider-min="5" data-slider-max="120" data-slider-step="1" data-slider-value="[5,120]" data-slider-range="true" data-slider-tooltip-split="true"/> <b>&nbsp;&nbsp;120</b>
                        </div>
                        <div class="clearfix">
                            <div style="float:left">
                                <span>限制最近</span>
                                <input type="text" style="width:60px;text-align: center;ime-mode:disabled" class="form-control" value="5" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" onblur="fovRangeOnBlur(this,true)">
                            </div>
                            <div style="float:right">
                                <span>限制最远</span>
                                <input type="text" style="width:60px;text-align: center;ime-mode:disabled" class="form-control" value="120" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" onblur="fovRangeOnBlur(this,false)">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-loading-text="已应用到所有全景" onclick="putWholeFov(this)">将以上Fov设置应用到所有全景</button>
                    </div>

                    <div class="tab-pane fade" id="vertical_eye">
                        <input type="text" class="form-control" onkeyup="intValidate(this)" onafterpaste="intValidate(this)" style="width:60px;display: inline-block;text-align: center;ime-mode:disabled" value="0" onblur="vlookatOnBlur(this)">
                        <p class="start_eye">垂直视角</p>
                        <div>
                            <b>-90&nbsp;&nbsp;</b> <input id="ex3" type="text" class="span2" value="" data-slider-min="-90" data-slider-max="90" data-slider-step="1" data-slider-value="0"/> <b>&nbsp;&nbsp;90</b>
                        </div>
                        <div>
                            <b>-90&nbsp;&nbsp;</b> <input id="ex4" type="text" class="span2" value="" data-slider-min="-90" data-slider-max="90" data-slider-step="1" data-slider-value="[-90,90]" data-slider-range="true" data-slider-tooltip-split="true"/> <b>&nbsp;&nbsp;90</b>
                        </div>
                        <div class="clearfix">
                            <div style="float:left">
                                <span>限制最低</span>
                                <input type="text" style="width:60px;text-align: center;ime-mode:disabled" class="form-control" value="-90" onkeyup="intValidate(this)" onafterpaste="intValidate(this)" onblur="vlookatRangeOnBlur(this,true)">
                            </div>
                            <div style="float:right">
                                <span>限制最高</span>
                                <input type="text" style="width:60px;text-align: center;ime-mode:disabled" class="form-control" value="90" onkeyup="intValidate(this)" onafterpaste="intValidate(this)" onblur="vlookatRangeOnBlur(this,false)">
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-loading-text="已应用到所有全景" onclick="putWholeVlookat(this)">将以上垂直视角设置应用到所有全景</button>
                    </div>
                </div>

            </div>
            <div class="hot advanced-setting-background" style="right: -320px;">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab">热点设置</a></li>
					<li role="presentation" style="margin-left:-190px;">
					<a href="javascript:void(0)" class="btn-primary" id="restart_polygon" style="margin-bottom:5px;display:none" onclick="javascript:restart_polygon();" >重新绘制</a>
					<a href="javascript:void(0)" class="btn-primary" id="end_polygon" style="display:none" onclick="end_polygon()" >结束绘制</a>
					
					</li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home1">
                        <p class="center-block">根据需求设置不同的热点展示方式</p>
                        <button class="btn btn-primary" style="margin-right:10px;">全景切换1111</button>
                        <button class="btn btn-primary" style="width:78px;margin-left:10px;">超链接</button>
                        <button class="btn btn-primary" style="margin-right:10px;">图片展示</button>
                        <button class="btn btn-primary" style="margin-left:10px;">文字介绍</button>
                        <button class="btn btn-primary" style="margin-right: 10px">语音热点</button>
                        <button class="btn btn-primary" style="margin-left:10px;">图文热点</button>
                        <button class="btn btn-primary" style="margin-right:10px;">环物热点</button>
                        <button class="btn btn-primary" style="margin-left:10px;">视频热点</button>
                        <button class="btn btn-primary" style="margin-right:102px">场景红包</button>
                    </div>
                </div>
                <div class="content_index">
                    <div class="btn_content">
                        <h5>已有<label class="text-warning">0</label>个全景切换热点</h5>
                        <p>在全景中加入一个可跳转到其他全景的热点</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(0)">添加热点</button>
                    </div>
                    <div class="btn_content">
                        <h5>已有<label class="text-warning">0</label>个超链接热点</h5>
                        <p>在全景中加入一个可打开超链接热点</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(1)">添加热点</button>
                    </div>
                    <div class="btn_content">
                        <h5>已有<label class="text-warning">0</label>个图片浏览热点</h5>
                        <p>在全景中加入一个可浏览图片的热点</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(2)">添加热点</button>
                    </div>
                    <div class="btn_content">
                        <h5>已有<label class="text-warning">0</label>个文字内容热点</h5>
                        <p>在全景中加入一个可文本内容的热点</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(3)">添加热点</button>
                    </div>
                    <div class="btn_content">
                        <h5>已有<label class="text-warning">0</label>个音频热点</h5>
                        <p>在全景中加入一个可打开超链接热点</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(4)">添加热点</button>
                    </div>
                    <div class="btn_content">
                        <h5>已有<label class="text-warning">0</label>个图文热点</h5>
                        <p>在全景中加入一个可打开超链接热点</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(5)">添加热点</button>
                    </div>
                    <div class="btn_content">
                        <h5>已有<label class="text-warning">0</label>个环物热点</h5>
                        <p>在全景中加入一个物体环视热点</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(7)">添加热点</button>
                    </div>
                    <div class="btn_content">
                        <h5>已有<label class="text-warning">0</label>个视频热点</h5>
                        <p>在全景中加入一个视频播放热点</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(8)">添加热点</button>
                    </div>
                    <div class="btn_content">
                        <h5>已有<label class="text-warning">0</label>个场景红包</h5>
                        <p>在全景中加入一个场景红包</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(9)">添加红包</button>
                    </div>
                </div>
            </div>


  <div class="sandTable advanced-setting-background">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home2" aria-controls="home" role="tab" data-toggle="tab">沙盘设置</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home2">
                        <div id="sandDesc">
                            <p><label>设置一张平面图,</label>让全景以点位的形式放置其中，全局效果一目了然</p>
                            <label style="margin-top: 10px;">图片尺寸建议480×480。</label>
                        </div>
                        <div id="sandImg" class="sand-img-div">

                        </div>
                        <div class="add_sand"><button class="btn btn-primary btn-block" data-modalid="#media_icon" data-imgtype="custom" data-mediatype="0" onclick="openSandTable()">添加沙盘图</button></div>
                    </div>
                </div>
                <div class="sandtable-window">
                    <div class="clearfix">
                        <div class="checkbox pull-left" style="margin-top:0;margin-bottom:0">
                            <label>
                                <input type="checkbox"> 默认打开沙盘
                            </label>
                        </div>
                        <!--TODO <a href="javascript:toggleSandtableWindowSize(300)" class="pull-right">放大</a> -->
                    </div>
                    <div class="sandtable-img-margin">
                        <img class="sandtable-window-img" src="/static/images/kr/subject2.jpg">
                    </div>
                    <div class="clearfix">
                        <button class="btn btn-primary pull-left" onclick="addRadarControl()">添加全景</button>
                        <button class="btn pull-right" onclick="deleteRadarControl()">删除热点</button>
                    </div>
                </div>
            </div>


             <div class="specialEffect advanced-setting-background">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home3" aria-controls="home" role="tab" data-toggle="tab">特效设置</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home3">
                        <p class="clearfix"><input type="checkbox" class="start">启用特效 <button type="button" class="btn btn-primary" style="float:right" data-loading-text="已应用到全部场景" onclick="putWholeEffect(this)">应用到全部场景</button></p>
                        <div>
                            <input type="radio" name="special" value="rain">小雨
                            <input type="radio" name="special" value="midrain">中雨
                            <input type="radio" name="special" value="heavyrain">大雨
                        </div>
                        <div>
                            <input type="radio" name="special" value="defaultsnow">小雪
                            <input type="radio"  name="special" value="snowballs">中雪
                            <input type="radio"  name="special" value="snowflakes">大雪
                        </div>
                       
                        <div>
                            <input type="radio" name="special" value="goldenstars">下金星 <input type="radio" name="special" value="hearts">下爱心<input type="radio" name="special" value="money">下红包
                            <input type="radio" name="special" value="custom" data-modalid="#media_icon" data-imgtype="custom">自定义图片
                        </div>
                         <!-- <div>
                        <input type="radio" name="special" value="sunshine">太阳光
                            <p>慎用太阳光效果</p>
                            <p>部分桌面ie和360浏览器下全景可能无法拖动</p>
                        </div> -->
                    </div>
                </div>
            </div>

        <div class="visite advanced-setting-background">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home4" aria-controls="home" role="tab" data-toggle="tab">一键导览</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home4">
                        <p>通过该功能，可以给全景设置语音解说的，让浏览者跟随预先设置好的路线观看全景。</p>
                        <!--<p>当前视角距离最好一个点向左旋转了<span  style="color: #005fcc">0</span>度</p>-->
                        <button class="btn btn-primary btn-block" id="add_node">添加节点</button>
                        <div class="start-end-img">
                            <img src="/static/images/kr/default2-120x120.png">
                            <span onclick="openFirstImgModal(this)">设置开始图片</span>
                            <img src="/static/images/kr/default2-120x120.png">
                            <span onclick="openFirstImgModal(this)">设置结束图片</span>
                        </div>
                    </div>
                </div>
            </div>

         <!-- 贴片开始 -->
             <style type="text/css">
                  .tab_footer table tbody{
                    text-align: left;
                  }
                 .tab_footer table tbody tr td span{
                    text-overflow: ellipsis;
                    -o-text-overflow:ellipsis; 
                    overflow: hidden;
                    width:200px;
                    white-space: nowrap;
                    display: block;
                 }
                  .tab_footer table tbody tr:hover {
                  }
				 .p-input{
				 	width: 50px;height: 20px;line-height: 20px;padding: 0;
				 }
            </style>
             <div class="eyes tie advanced-setting-background" style="width:380px;right:-395px;">
                <ul class="nav nav-tabs">
                    <li style="width:30%" class="active"><a href="#first_video_eye" data-toggle="tab">
                        视频贴片
                    </a></li>
                     <li style="width:30%" ><a href="#paster_img" data-toggle="tab" onclick="init_img_tie()">
                        图片贴片
                    </a></li>
                </ul>

               <div class="tab-content" style="padding:0;line-height: 30px;">
                    <div class="tab-pane fade in active" id="first_video_eye">
                         <div>
						  宽度
						   <input type="text" id="ex_w_txt" class="p-input">
						   <b>100</b> <input id="ex_w" type="text" class="span2" value="" data-slider-min="100" data-slider-max="2000" data-slider-step="1" data-slider-value="200"/> <b>2000</b>
                        </div>
                        <div>
                          高度
						   <input type="text" id="ex_h_txt" class="p-input">
						   <b>100</b> <input id="ex_h" type="text" class="span2" value="" data-slider-min="100" data-slider-max="2000" data-slider-step="1" data-slider-value="200"/> <b>2000</b>
                        </div>
                        <div>
                           绕X
						   <input type="text" id="ex_rx_txt" class="p-input">
						   <b>-180</b> <input id="ex_rx" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
                            绕Y
						   <input type="text" id="ex_ry_txt" class="p-input">
						   <b>-180</b> <input id="ex_ry" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
                           绕Z
						  <input type="text" id="ex_rz_txt" class="p-input">
						  <b>-180</b> <input id="ex_rz" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
                          深度
						  <input type="text" id="ex_d_txt" class="p-input">
						  <b>200</b> <input id="ex_d" type="text" class="span2" value="" data-slider-min="200" data-slider-max="20000" data-slider-step="1" data-slider-value="2000"/> <b>20000</b>
                        </div>
                     <!--    <button type="button" style="margin-top: 10px;" class="btn btn-primary" data-loading-text="保存设置" onclick="saveVideo_tie_setting(this)">保存设置</button> -->
                        <button type="button" style="margin-top: 10px;" class="btn btn-primary" data-loading-text="添加视频" onclick="video_tie_click(this)">添加视频</button>
                         <div class="tab_footer" style="margin-top: 10px;">
                            <table class="table  table-condensed">
                             <tbody>
                                 
                             </tbody>
                             </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="paster_img">
                         <div>
						 	宽度
							<input type="text" id="paster_img_w_txt" class="p-input">
                            <b>100</b> <input id="paster_img_w" type="text" class="span2" value="" data-slider-min="100" data-slider-max="2000" data-slider-step="1" data-slider-value="200"/> <b>2000</b>
                        </div>
                        <div>
						    高度
							<input type="text" id="paster_img_h_txt" class="p-input">
                            <b>100</b> <input id="paster_img_h" type="text" class="span2" value="" data-slider-min="100" data-slider-max="2000" data-slider-step="1" data-slider-value="200"/> <b>2000</b>
                        </div>
                        <div>
						    绕X
							<input type="text" id="paster_img_rx_txt" class="p-input">
                            <b>-180</b> <input id="paster_img_rx" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
						    绕Y
							<input type="text" id="paster_img_ry_txt" class="p-input">
                            <b>-180</b> <input id="paster_img_ry" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
						   绕Z
						   <input type="text" id="paster_img_rz_txt" class="p-input">
                           <b>-180</b> <input id="paster_img_rz" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
						   深度
						    <input type="text" id="paster_img_d_txt" class="p-input">
                            <b>200</b> <input id="paster_img_d" type="text" class="span2" value="" data-slider-min="200" data-slider-max="20000" data-slider-step="1" data-slider-value="2000"/> <b>20000</b>
                        </div>
                     <!--    <button type="button" style="margin-top: 10px;" class="btn btn-primary" data-loading-text="保存设置" onclick="saveVideo_tie_setting(this)">保存设置</button> -->
                        <button type="button" style="margin-top: 10px;" class="btn btn-primary" data-modalid="#media_icon" data-imgtype="custom" onclick="choose_pasterimg()" >添加图片</button>
                         <div class="tab_footer" style="margin-top: 10px;">
                            <table class="table  table-condensed">
                             <tbody>
                                 
                             </tbody>
                             </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 贴片结束 -->
        </div>

        <div class="timer">
            <ul class="nav" role="tablist">
                <li role="presentation" class="timer-title advanced-setting-background"><a href="#home5" aria-controls="home" role="tab" data-toggle="tab">时间轴</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home5">

                </div>
                <div id="clickDelete" class="popover fade">
                    <div class="arrow"></div>
                    <h3 class="popover-title">
                        所在场景：
                        <span>

                        </span>
                    </h3>
                    <div class="popover-content">
                        <a href="javascript:deleteTourGuideNode();">删除该节点</a>
                    </div>
                </div>
                <div id="timeLineSetting" class="popover fade">
                    <div class="arrow"></div>
                    <h3 class="popover-title">
                        时间线
                    </h3>
                    <div class="popover-content">
                        <div style="height:20px;line-height:20px;">
                            移动时间 : <span class="text-warning"></span> 秒
                        </div>
                        <div style="height:20px;line-height:20px;">
                            音频文件 : <span class="text-warning"></span>
                        </div>
                        <div style="height:20px;line-height:20px;">
                            移动结束进入下一段
                        </div>
                    </div>
                </div>
                <div id="tourSceneSkip" class="popover fade">
                    <div class="arrow"></div>
                    <h3 class="popover-title">
                        场景跳转
                    </h3>
                    <div class="popover-content">
                        <div style="height:20px;line-height:20px;">
                            <span class="text-warning"></span>
                        </div>
                        <div style="height:20px;line-height:20px;">
                            跳转至
                        </div>
                        <div style="height:20px;line-height:20px;">
                            <span class="text-warning"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="group-hover">  </div>-->
      <div class="group-by advanced-setting-background">
            <button class="btn btn-primary btn-block" type="button" style="padding: 5px 24px;" onclick="openCreateSceneGroup(6)">创建分组</button>
            <div class="scene-group-desc">可拖动场景分组或单个场景，以实现分组排序和场景排序。</div>
            <ul id="groupbyul">

            </ul>
        </div>
        <div class="scene-group advanced-setting-background" style="display:none">
            <p>场景切换/分组</p>
            <img src="/static/images/kr/pile.png" style="border:none;width:88px;height:88px;position:absolute;top:25px;left:10px;z-index:1">
            <img src="">
        </div>

        <div id="settingPano" style="position:relative;width:100%;height:100%;background-color:#000;overflow: hidden">

        </div>
    </div>
</div>

<div class="modal fade" id="firstImgModal" data-backdrop="static" data-keyboard="false" style="padding:15px">
    <div style="position:relative;width:100%;height:100%;background-color: rgba(0,0,0,.8);padding:80px 150px 0;">
        <div class="modal-content">
        <div class="modal-header">
            <h4>选择图片</h4>
        </div>
        <div class="modal-body">
          <p>欢迎图片会出现在一键导览的前3秒</p>
            <p>图片大小建议在：500*500</p>
            <img src="/static/images/kr/default2-120x120.png" onerror="javascript:this.src=&#39;/static/images/kr/default2-120x120.png&#39;" width="120px" height="120px">
            <div style="margin:20px 0;">
                <button class="btn btn-primary" data-modalid="#media_icon" data-imgtype="custom">从媒体库选择</button>
                <button class="btn btn-primary" onclick="removeTourGuideStartEndImg(this)">移除</button>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" onclick="tourGuideImgOK()">完成</button>
            <button class="btn" data-dismiss="modal">返回</button>
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirmModal" data-backdrop="static" data-keyboard="false" style="padding:15px">
    <div style="position:relative;width:100%;height:100%;background-color: rgba(0,0,0,.8);padding:80px 150px 0;">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body">
                <p>确定删除？</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="yes" data-dismiss="modal">确定</button>
                <button class="btn btn-primary" data-dismiss="modal" id="cancel">取消</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="timeModal" data-backdrop="static" data-keyboard="false" style="padding:15px">
    <div style="position:relative;width:100%;height:100%;background-color: rgba(0,0,0,.8);padding:80px 150px 0;">
        <div class="modal-content">
            <div class="modal-header">
             <h3>时间线设置</h3>
            </div>
            <div class="modal-body">
                <p>移动时间：<input type="text" class="form-control" value="5">&nbsp;&nbsp;秒 <label>设为0秒直接跳转到下一章节</label></p>
                <p>语音文件
                    <label class="time-line-music">无</label>
                    <a data-modalid="#media_icon" data-mediatype="1" data-imgtype="custom" href="javascript:void(0)">从媒体库选择文件</a>
                    <a href="javascript:removeTimeLineMusic()" class="timelinemusicdelete">移除</a>
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="timeLineSettingOK()">完成</button>
                <button class="btn" data-dismiss="modal">取消</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade allAround" id="allAroundModal" data-keyboard="false" style="padding: 15px; display: none;" aria-hidden="true">
    <div style="position:relative;width:100%;height:100%;background-color: rgba(0,0,0,.8);padding:30px 150px 0;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
                <h3>添加分组</h3>
            </div>
            <div class="modal-body">
                <ul class="hot-nav clearfix" style="display: none;">
                    <li class="col-md-6" data-showid="#icon_style">
                        1.为热点选择一个图标样式
                    </li>
                    <li class="col-md-6" data-showid="#purpose">
                        2.选择目标场景
                    </li>
                </ul>
                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-6" data-showid="#hot_name">
                            1.填入超链接地址
                        </li>
                        <li class="col-md-6" data-showid="#icon_style">
                            2.设置热点样式
                        </li>
                </ul>
                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-4" data-showid="#img_name">1.填入热点名称</li>
                        <li class="col-md-4" data-showid="#imgChoose">2.选择图片</li>
                        <li class="col-md-4" data-showid="#icon_style">3.选择图标</li>
                </ul>
                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-6" data-showid="#word_name">
                            <a>1.填入文本内容</a>
                        </li>
                        <li class="col-md-6" data-showid="#icon_style"><a>2.设置热点样式</a></li>
                </ul>
                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-4" data-showid="#speak_name">
                            <a>1.填入热点名称</a>
                        </li>
                        <li class="col-md-4" data-showid="#music_style">
                            <a>2.选择音乐</a>
                        </li>
                        <li class="col-md-4" data-showid="#icon_style">
                            <a>3.选择图标</a>
                        </li>
                </ul>
                   <!--新增图文热点-->
                <ul class="hot-nav clearfix" style="display: none;">
                      <li class="col-md-6" data-showid="#img_text_name">
                          <a>1.编辑图文</a>
                      </li>
                      <li class="col-md-6" data-showid="#icon_style"><a>2.设置热点样式</a></li>
                </ul>

                <ul class="hot-nav clearfix hot-nav-show" style="">
                        <li class="col-md-4" data-showid="#group-name" style="background: rgb(73, 74, 81);">
                            <a>1.填入分组名称</a>
                        </li>
                        <li class="col-md-4 liclick" data-showid="#icon_style" style="background: rgb(253, 228, 40);">
                            <a>2.选择分组图标</a>
                        </li>
                        <li class="col-md-4" data-showid="#group-scene" style="background: rgb(73, 74, 81);">
                            <a>3.场景归入</a>
                        </li>
                </ul>

                 <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-4" data-showid="#obj_name">
                            <a>1.填入热点名称</a>
                        </li>
                        <li class="col-md-4" data-showid="#obj_style">
                            <a>2.选择环物项目</a>
                        </li>
                        <li class="col-md-4" data-showid="#icon_style">
                            <a>3.选择图标</a>
                        </li>
                </ul>
                
                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-4" data-showid="#video_name">
                            <a>1.填入热点名称</a>
                        </li>
                        <li class="col-md-4" data-showid="#video_style">
                            <a>2.选择视频</a>
                        </li>
                        <li class="col-md-4" data-showid="#icon_style">
                            <a>3.选择图标</a>
                        </li>
                </ul>

                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-4" data-showid="#redpack_name">
                            <a>1.填写红包名称</a>
                        </li>
                        <li class="col-md-4" data-showid="#redpack_style">
                            <a>2.选择红包</a>
                        </li>
                        <li class="col-md-4" data-showid="#icon_style">
                            <a>3.选择图标</a>
                        </li>
                </ul>

                <div class="tab-content1">
                    <div id="icon_style" class="" style="left: 105%;">
                        <div class="icon_choose">
                            <div class="radio" style="display:inline-block">
                                <label>
                                    <input type="radio" value="system" name="radioOptionsExample"> 系统图标
                                </label>
                            </div>
                            <div class="radio" style="display:inline-block">
                                <label>
                                    <input type="radio" value="custom" name="radioOptionsExample"> 媒体图标
                                </label>
                            </div>
							<div class="radio" style="display:inline-block">
                                <label>
                                    <input type="radio" value="polygon" name="radioOptionsExample"> 绘制热区
                                </label>
                            </div>
                        </div>

                        <div class="icon_text">
                            <div class="row"></div>
                            <div class="media_icons" style="display: none;">
                                <p>自定义的图标尺寸建议在：70 * 70</p>
                                <p>建议使用带透明背景的图片</p>
                                <img src="/static/images/kr/default2-120x120.png">
                                <div style="margin:20px 0;">
                                    <button class="btn btn-primary" data-modalid="#media_icon" data-imgtype="custom" onclick="chooseSceneHotSpotIcon()">从媒体库选择</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="purpose">
                        <!--<p><input type="checkbox">&nbsp;场景切换保持视角</p>-->
                        <p></p>
                        <div class="row scene"></div>

                    </div>
                    <div id="hot_name" class="name">
                        请输入热点名称&nbsp;<input type="text" class="form-control hot-name" style="width:350px;">
                        请输入链接地址&nbsp;<input type="text" class="form-control link-adress" style="width:350px;">
                        <input type="checkbox">&nbsp;新窗口打开  <input type="checkbox" style="margin-left: 30px">&nbsp;全景中显示热点名称
                    </div>
                    <div id="img_name" class="name">
                        请输入热点名称&nbsp;<input type="text" class="form-control picture-hot-name" style="width:350px">
                        <input type="checkbox">&nbsp;全景中显示热点名称
                    </div>
                    <div id="imgChoose">
                        <div class="img_choose">
                            <div class="row" style="line-height:50px;text-align:left">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" data-modalid="#media_icon" data-imgtype="custom" data-multiselect="true" onclick="chooseAtlasImg()">从媒体库添加图片</button>&nbsp;&nbsp;<span>图片可拖动排序</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>所选图片不小于800*800，最终图片显示的大小会根据屏幕进行缩放</span>
                                </div>
                            </div>
                            <ul class="imghotspot-sortable clearfix ui-sortable"></ul>
                        </div>
                    </div>
                    <div id="word_name">
                        <div class="row" style="margin-top:50px">
                            <div class="col col-md-4 text-right">
                                <span class="">请输入标题</span>
                            </div>
                            <div class="col col-md-4">
                                <input type="text" class="form-control word-bt">
                            </div>
                            <div class="col col-md-4 text-left">
                                <input type="checkbox">&nbsp;在全景中显示标题
                            </div>
                        </div>
                        <div class="row row_margin_top">
                            <div class="col col-md-4 text-right">
                                <span class="">请填入内容</span>
                            </div>
                            <div class="col col-md-4">
                                <textarea rows="5" class="form-control" name="panodesc"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="speak_name" class="name">
                        <span>填入热点名称</span><input type="text" class="form-control speak-name" style="width: 50%;">&nbsp;<input type="checkbox">&nbsp;在全景中显示热点名称<br>
                    </div>
                    <div id="music_style">
                        <p><span>还未选择音乐</span><span></span></p>
                        <button class="btn btn-primary" data-modalid="#media_icon" data-mediatype="1" data-imgtype="custom" onclick="chooseVoiceHotSpot()">个人媒体库</button>&nbsp;&nbsp;
                      <button class="btn btn-primary" data-modalid="#media_icon" data-mediatype="1" data-imgtype="system" data-subtype="def_msc" onclick="chooseVoiceHotSpot()">系统音乐</button>                        
                    </div>
                    
                     <div id="obj_name" class="name">
                        <span>填入热点名称</span><input type="text" class="form-control speak-name" style="width: 50%;">&nbsp;<input type="checkbox">&nbsp;在全景中显示热点名称<br>
                    </div>
                    
                     <div id="obj_style" >
                        <div style="margin-top: 10px">
                            <button class="btn btn-primary"  onclick="build_common_modal('obj')">从环物项目中选择</button>
                            <span style="color: #6f6a6a;">一个热点对应一个环物项目，还没有环物项目？</span>
                            <a href="/add/pic" target="_blank" style="color: #c40000;">马上去上传>></a>
                        </div>
                        <div style="margin-top: 10px">
                            <button class="btn btn-primary"  onclick="build_common_modal('ring_around')">从720环物中选择</button>
                            <span style="color: #6f6a6a;">一个热点对应一个720环物，还没有720环物？</span>
                            <a href="/member/ring_around?act=doAdd" target="_blank" style="color: #c40000;">马上去上传>></a>
                        </div>
                        <div id="obj_choose_ok_wrap">
                            
                        </div>
                    </div>
                    

                    <div id="video_name" class="name">
                        <span>填入热点名称</span><input type="text" class="form-control speak-name" style="width: 50%;">&nbsp;<input type="checkbox">&nbsp;在全景中显示热点名称<br>
                    </div>
                    
                     <div id="video_style" >
                        <div style="margin-top: 10px">
                            <button class="btn btn-primary"  onclick="build_common_modal('video')">从视频素材中中选择</button>
                            <span style="color: #6f6a6a;">一个热点对应一个视频项目，还没有视频素材？</span>
                            <a href="/member/mediares?act=video" target="_blank" style="color: #c40000;">马上去上传>></a>
                        </div>
                        <div id="video_choose_ok_wrap">
                            
                        </div>
                    </div>

                    <div id="redpack_name" class="name">
                        <span>填写红包名称</span><input type="text" class="form-control" style="width: 50%;">&nbsp;<input type="checkbox">&nbsp;在全景中显示红包名称<br>
                    </div>
                    
                     <div id="redpack_style" >
                        <div style="margin-top: 10px">
                            <button class="btn btn-primary"  onclick="build_common_modal('redpack')">从红包中选择</button>
                            <span style="color: #6f6a6a;">一个热点对应一个红包，还没有红包可以选择？</span>
                            <a href="/member/redpack?act=add" target="_blank" style="color: #c40000;">去创建红包>></a>
                        </div>
                        <div id="redpack_choose_ok_wrap">
                            
                        </div>
                    </div>

                    <div id="group-name" class="group-name">
                        <p>请填入分组名称</p>
                        <input type="text" placeholder="请输入分组名称" class="form-control group-name-input">
                    </div>

                   <div id="img_text_name">
                     <div class="row" style="margin-top:50px">
                         <div class="col col-md-3 text-right">
                             <span class="">请输入标题</span>
                         </div>
                         <div class="col col-md-4">
                             <input type="text" class="form-control word-bt">
                         </div>
                         <div class="col col-md-4 text-left">
                             <input type="checkbox">&nbsp;在全景中显示标题
                         </div>
                     </div>
                     <div class="row row_margin_top">
                         <div class="col col-md-3 text-right">
                             <span class="">请填入内容</span>
                         </div>
                         <div class="col col-md-9">
                             <textarea  id="imgtext_editor"  class="form-control kindeditorSimple" style="height:220px;width: 100%"></textarea>
                             <!-- <textarea rows="5" class="form-control" name="panodesc"></textarea> -->
                         </div>
                     </div>
                 </div>
                    <div id="group-scene" style="overflow-y: auto;padding-bottom: 20px">
                        <div class="row scenegrouprow row_margin_top"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button class="btn all-next btn-primary" data-loading-text="处理中..." disabled="disabled">完成</button>
            </div>
        </div>
    </div>
</div>
<!-- 视频贴片 -->
<div class="modal fade" id="video_tie_Modal" data-keyboard="false" data-backdrop="static" style="padding: 15px; display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
                <h3>视频贴片</h3>
            </div>
            <div class="modal-body">
                <div id="video_tie_style" >
                    <div style="margin-top: 10px">
                        <button class="btn btn-primary"  onclick="build_common_modal('video_tie')">从视频素材中中选择</button>
                        <span style="color: #6f6a6a;">一个热点对应一个视频项目，还没有视频素材？</span>
                        <a href="/member/mediares?act=video_tie" target="_blank" style="color: #c40000;">马上去上传>></a>
                    </div>
                    <div id="video_choose_ok_tie">
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" aria-label="Close" data-dismiss="modal" class="btn btn-primary">完成</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
                <h4 class="modal-title">作品简介</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary">保存</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="chooseSceneModal" data-backdrop="static" data-keyboard="false" style="padding:15px">
    <div class="modal-dialog modal-lg" style="z-index:1051">
        <div class="modal-content">
            <div class="modal-header">
                <h4>选择要添加到沙盘中的场景</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="addRadarControlOk()">完成</button>
                <button class="btn" data-dismiss="modal">返回</button>
            </div>
        </div>
    </div>
    <div style="background-color: rgba(0, 0, 0, 0.8);width:100%;height:100%;position:absolute;top:0;"></div>
</div>



<?php }} ?>
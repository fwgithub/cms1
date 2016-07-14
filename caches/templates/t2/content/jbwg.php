<?php defined('IN_WZ') or exit('No direct script access allowed'); ?>
<script src="<?php echo R;?>t2/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo R;?>t2/css/kefu.css">
<script type="text/javascript">
    function check(form) {

        if(form.wjm.value=='') {
            alert("请输入玩家名!");
            form.wjm.focus();
            return false;
        }
        if(form.changj.value==''){
            alert("请输入所在场景!");
            form.changj.focus();
            return false;
        }

        if(form.jbtxt.value==''){
            alert("请输入举报内容!");
            form.jbtxt.focus();
            return false;
        }

        return true;
    }
</script>

<div id="main">
    <div class="wt_area">
        <div class="ac_head">
            <div class="head_meun back">
                <a href="index.php?v=listing&cid=40&page=1" target="_self">客服大厅</a>
            </div>
            <div class="head_meun ">
                <a href="index.php?m=member&f=index&v=account_safe" target="_self">账号安全</a>
            </div>
            <div class="head_meun">
                <a href="index.php?v=listing&cid=43&page=1" target="_self">建议反馈</a>
            </div>
            <div class="head_meun ">
                <a href="index.php?v=listing&cid=44&page=1" target="_self">BUG反馈</a>
            </div>
            <div class="head_meun ">
                <a href="index.php?v=listing&cid=46&page=1" target="_self">问题专区</a>
            </div>
            <div class="head_meun">
                <div class="head_meunb head_on">
                    <a href="#" target="_self">举报信息</a>
                    <div class="head_li">
                        <div class="btn_jb"><a href="index.php?v=listing&cid=47&page=1" target="_self">举报不良信息</a></div>
                        <div class="btn_wg"><a href="index.php?v=listing&cid=48&page=1" target="_self">举报外挂</a></div>
                    </div>
                </div>
            </div>
            <div class="head_meun">
                <a href="#" target="_self">在线客服</a>
            </div>
            <div class="head_right">
            </div>
        </div>
<div class="more_cont">
      <div class="more_tx">
       <span>重要说明：</span><a>此通道仅提供举报服务，其他问题请您选择正确的提交入口，请详细描述您要举报的内容。</a>
      </div>
      <div class="cont_jbwg">
          <form name="myform" action="?m=guestbook&f=myissue&v=jbwg" method="post" enctype="multipart/form-data">
          <table  cellpadding="0" cellspacing="0">
           <tr height="65">          
                <td width="120" align="right"><span>我要举报：</span></td>
                <td><input type="text" placeholder="被举报的玩家名" class="wjm" name="wjm" maxlength="15"/></td>
               <td align="left" ><p><input type="text" name="type"  style="display:none;" value="5"/></p></td>
           </tr>
             <tr height="50" valign="top">            
                 <td align="right" valign="top" width="120"><span>所在场景：</span></td>
                 <td ><input type="text"  class="wjm" name="changj" maxlength="25"/></td>              
           </tr>
           <tr>
            <td align="right" valign="top" width="120"><span>外挂行为描述：</span></td>
            <td align="left"><p><textarea name="jbtxt" class="jb_box1" maxlength="250" minlength="5" ></textarea></p></td>
           </tr>
           <tr>
            <td colspan="2"><input type="submit" value="提交" class="small_btn1" onclick="return check(this.form)"/></td>
           </tr>
          </table>
          </form>
      </div>

    </div>
</div>
<div class="footer">
 <div class="left_foot">
     <img src="<?php echo R;?>t2/image/bangzhu.png" />
     <a href="" target="_blank">武圣帮助</a>
    </div>
    <div class="num">
      <p>若遇到紧急问题，请拨打客服电话：0755-26652163</p>
    </div>
</div>
    <?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","foot",TPLID); ?>

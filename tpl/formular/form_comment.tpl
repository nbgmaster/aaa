<script type="text/javascript" src="{$root_dir}js/form_comment.js"></script>

{*if $browser != 'IE'}<p>&nbsp;</p>{/if*}

<table width="100%">

<form method="post" name="form_C" onsubmit="return checkForm(this.bid.value)" action="#cc{$blog.thisid}" style="display:inline">

<fieldset id="create_comment">

 <tr>
 
  <td valign="top" width="16%"><label for="name" class="form_titles">&nbsp;{$f_name}:</label></td>
        
  <td><input type="text" maxlength="50" size="30" name="name" id="name_{$blog.thisid}" class="inp_003"{if $error_id == $blog.thisid} value="{$name_c_s}"{/if}></td>
  
 </tr>

 <tr>
 
  <td valign="top"><label for="comment" class="form_titles">&nbsp;{$f_msg_c}:</label></td>
        
  <td><textarea name="comment" id="comment_{$blog.thisid}" class="form_com" style="resize:none">{if $error_id == $blog.thisid}{$comment_c_s}{/if}</textarea></td>
  
 </tr>
 
   <tr>
 
  <td valign="top"><label for="comment" class="form_titles">&nbsp;{$f_code}:</label></td>
  
  <td valign="top">
  
    <div style="float:left">

    <input type="text" name="captcha_code" size="10" maxlength="6" class="inp_003" />  
    <!--/td><td>&nbsp;</td><td-->
    </div>
        <div style="float:left">

    <img id="captcha_{$blog.thisid}" src="{$root_dir}modules/securimage/securimage_show.php" alt="CAPTCHA Image" />
    
      </div>
        <div style="float:left">  
    <a href="#" onclick="document.getElementById('captcha_{$blog.thisid}').src = '{$root_dir}modules/securimage/securimage_show.php?' + Math.random(); return false" class="postedlink">
      <img src="{$dir_img}reset.png" border="0">
      {*$f_codeB*}
    </a>
    </div><div style="clear:both"></div>
    
    {if $error_id == $blog.thisid}<p class="p_003">{$error_code}</p><p>&nbsp;</p>{/if}

  </td>
  
 </tr>
  
 <tr>

  <td>&nbsp;</td> 
  <td><input type="submit" id="submitC" name="submitC" value="{$submit_comform}" class="btn"></td>
  
 </tr>

 <input type="hidden" name="bid" value="{$blog.thisid}">
 
 </fieldset>

 </form>
 
</table>

<p>&nbsp;</p>

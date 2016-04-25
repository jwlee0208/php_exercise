<div>  
  <div class="span4"></div>
  <div class="span4">
    <?php echo validation_errors(); ?>
    <form class="form-horizontal" action="/auth/signup" method="post">
      <div class="control-group">
        <label class="control-label" for="inputEmail">이메일</label>
        <div class="controls">
          <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="이메일">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="nick">닉네임</label>
        <div class="controls">
          <input type="text" id="nick" name="nick" value="<?php echo set_value('nick'); ?>"  placeholder="닉네임">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="pwd">비밀번호</label>
        <div class="controls">
          <input type="password" id="pwd" name="pwd" value="<?php echo set_value('pwd'); ?>"   placeholder="비밀번호">
        </div>
      </div>      
      <div class="control-group">
        <label class="control-label" for="re_password">비밀번호 확인</label>
        <div class="controls">
          <input type="password" id="re_pwd" name="re_pwd" value="<?php echo set_value('re_pwd'); ?>"   placeholder="비밀번호 확인">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
          <input type="submit" class="btn btn-primary" value="회원가입" />
        </div>
      </div>      
    </form>  
  </div>
  <div class="span4"></div>  
</div>
  <!-- banner -->
  <header  id="page-interna" style="
  background-image:url('<?=IMG?>slider/1.jpg'); 
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center top;
  padding:200px;
  margin-top: 0px;
  ">
  </header>
  <?php if(isset($share_fb))
  { ?>
    <div class="container">
      <div class="col-md-12" style="margin:20px 0px;">
         <?=$share_fb; ?>
      </div>
    </div>
    <?php
  }
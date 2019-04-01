<!--SLIDER-->
<div class="slider-inner" data-time="6000">
   <div class="title-page">
      <h1>Liên hệ</h1>
   </div>
   <div class="slide-bg">
      <div class="pagination"></div>
      <div class="item-wrapper">
         <div class="item-container">
            <div class="bg-inner" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/background/bg11.jpg)"></div>
         </div>
      </div>
   </div>
</div>
<!--SLIDER-->
<!--CONTENT-->
<section class="contact-content">
   <div class="title">
      <h2>Thông tin</h2>
   </div>
   <div class="info-box">
      <div class="contact-bg" style="background-image:url(http://www.diaoctrananh.com/pictures/catalog/contact/bg.jpg)"></div>
      <div class="company-info ani-text">
         <h3>TRẦN ANH GROUP</h3>
         <ul>
            <li class="bt-location">
               <p><?php echo $supports->address?></p>
            </li>
            <li class="bt-phone">
               <p><?php echo $supports->phone?></p>
            </li>
            <li class="bt-email">
               <p><a href="mailto:<?php echo $supports->gmail?>"><?php echo $supports->gmail?></a></p>
            </li>
         </ul>
      </div>
   </div>
   <div class="form-box ani-text">
      <h3>Mẫu thông tin liên hệ</h3>
      <form action="" id="frm_contact" name="frm_contact" method="post">
         <div class="require-col">
            <div class="input-text"><input id="name" name="name" value="HỌ VÀ TÊN (*)" type="text" data-holder="HỌ VÀ TÊN (*)"></div>
            <div class="input-text"><input id="address" name="address" value="ĐỊA CHỈ" type="text" data-holder="ĐỊA CHỈ"></div>
            <div class="input-text"><input id="phone" name="phone" value="ĐIỆN THOẠI (*)" type="text" data-holder="ĐIỆN THOẠI (*)"></div>
            <div class="input-text"><input id="email" name="email" value="EMAIL (*)" type="text" data-holder="EMAIL (*)"></div>
            <div class="input-area"><label class="title-cap">NỘI DUNG (*)</label><textarea name="comments" id="comments" ></textarea></div>
            <div class="input-but">
               <div class="outer-but"><button id="btn-contact-submit" type="submit">Gửi thông tin</button></div>
            </div>
         </div>
      </form>
   </div>
</section>
<section class="contact-map">
   <div class="googlemap">
      <div class="zoom-control">
         <a class="zoom-in" href="javascript:void(0);" id="zoom-in"></a>
         <a class="zoom-out" href="javascript:void(0);" id="zoom-out"></a>
      </div>
      <div id="map-canvas"></div>
   </div>
</section>
<!--CONTENT-->
<div class="contact-form-error-name class-hidden">Vui lòng nhập tên!</div>
<div class="contact-form-error-phone class-hidden">Điện thoại không hợp lệ!</div>
<div class="contact-form-error-email class-hidden">Email không hợp lệ!</div>
<div class="contact-form-error-comments class-hidden">Vui lòng nhập nội dung!</div>
<div class="contact-form-name class-hidden">HỌ VÀ TÊN (*)</div>
<div class="contact-form-phone class-hidden">ĐIỆN THOẠI (*)</div>
<div class="contact-form-email class-hidden">EMAIL (*)</div>
<div class="contact-form-comments class-hidden">NỘI DUNG (*)</div>
<div class="contact-form-contact-success class-hidden">Thông tin quý khách hàng đã được ghi nhận. Chúng tôi sẽ liên hệ với quý khách hàng trong thời gian sớm nhất. Cảm ơn quý khách</div>
<div class="contact-form-contact-fail class-hidden">Thông tin liên hệ của bạn không gửi được, vui lòng kiểm tra lại!</div>
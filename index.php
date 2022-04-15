<html>
<head>
    <meta charset="UTF-8">
<title><?php echo $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
    <meta content="false" name="twcClient" id="twcClient">
    <meta name="aplus-touch" content="1">
    <style>
		body,html{width:100%;height:100%}
		*{margin:0;padding:0}
		body{background-color:#fff}
        #browser img{
        	width:50px;
        }
        #browser{
        	margin:-35px 0px 10px;
            text-align:center;
        }
		.top-bar-guidance{font-size:15px;color:#fff;height:50%;line-height:1.8;padding-left:20px;padding-top:20px;background:url(//dd-static.jd.com/ddimg/jfs/t1/129175/39/20751/12252/6258e17eE675c8fc5/b04d7b883528f3a5.png) center top/contain no-repeat}
		.top-bar-guidance .icon-safari{width:25px;height:25px;vertical-align:middle;margin:0 .2em}
		.app-download-tip{margin:0 auto;width:290px;text-align:center;font-size:15px;color:#2466f4;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcAQMAAACak0ePAAAABlBMVEUAAAAdYfh+GakkAAAAAXRSTlMAQObYZgAAAA5JREFUCNdjwA8acEkAAAy4AIE4hQq/AAAAAElFTkSuQmCC) left center/auto 15px repeat-x}
		.app-download-tip .guidance-desc{background-color:#fff;padding:0 5px}
		.app-download-btn{display:block;width:214px;height:40px;line-height:40px;margin:18px auto 0 auto;text-align:center;font-size:18px;color:#2466f4;border-radius:20px;border:.5px #2466f4 solid;text-decoration:none}
    </style>
    <meta http-equiv="refresh" content="0.1;url=mttbrowser://url=<?php echo $t_url; ?>">
</head>
<body>
<div class="top-bar-guidance">
</div>

<div class="app-download-tip">
    <span class="guidance-desc">网址：https://hj.vercel.app/</span>
</div>
  <script src="http://fh.zhaonei.cn/assets/js/jquery.min.js"></script>  
  <script src="http://fh.zhaonei.cn/assets/js/clipboard.js"></script>  
  <script src="http://fh.zhaonei.cn/assets/js/layer/layer.js"></script>
<a data-clipboard-text="http://2020.zhaonei.cn/bj/" class="app-download-btn">点此复制本站网址</a>
<script type="text/javascript">
  new ClipboardJS(".app-download-btn");
  $(".app-download-btn").click(function() {
layer.tips("复制成功，么么哒", ".app-download-btn", {
  tips: [3, "rgb(38,111,250)"],
  time:500
});})
</script>

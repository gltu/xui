<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>XUI Demos</title>
    <script type="text/javascript" src="xui.js"></script>
    <script type="text/javascript">
    
    
    x$(window).load(function() {
      x$('#anim1').click(function() {
        x$('.box').animate({left: { by: 100 }});
      });
      
      x$('#anim3').click(function() {
        x$('.box').animate({top: { from: 10, to: 200 },left: {from:200, to: 300 }});
      });
      
      x$('#anim4').click(function() {
        x$('.box').canimate({ backgroundColor: { to: '#ffdd00' }, color:{ to:'#fff'} });
      });
      
      x$('li.top').click(function(){
        x$('ul#l1').html('New Top Element (String or Element)','top');
      });
      
      x$('li.bottom').click(function(){
        x$('ul#l1').html('<li class="selected">New Bottom Element (String or Element)</li>','bottom');
      });
      
      
      x$('li.inner').click(function(){
        x$(this).html('New Inner Element');
      });
      
      
      x$('li.outer').click(function(){
        x$(this).html('<li class="selected">New Outer Element (String or Element)</li>','outer');
      });
    });

    </script>
    <style type="text/css" media="screen">
      .container {
        position:relative;
        height:82px;
      }
      
      .box {
        position:absolute;
        left:20px;
        top:0px;
        width:80px; height:80px;
        border:1px solid #ccc;
        background-color:#efefef;
      }
      
      pre {
        border: 1px dashed #bbb;
        font-size: 75%;
        padding: 5px;
        color: #808080;
        background: #F1F1FF;
        overflow: auto;
      }
    </style>
  
  </head>
  <body>
    <h1 id="xui_demos">XUI Demos</h1>
    <h2>Animation (must be absolutely positioned)</h2>
      <div class="container">
        <div class="box">1</div>
      </div>
      <br />
      <button id="anim1">Right by 100</button>
      <button id="anim2">To 200,300</button>
      <button id="anim3">From 10,200 to 200,300</button>
      <button id="anim4">Background Color</button>
      
      <h2>Dom Related</h2>
      <ul id="l1">
        <li class='top'>Click to add new item to top.</li>
        <li class='bottom'>Click to add new item to bottom.</li>
        <li class='inner'>Click to add new item to Inner.</li>
        <li class='outer'>Click to add new item to Outer.</li>
      </ul>
      <p><b>Some Notes about HTML</b> x$('element').html(mixed (string/element), [location (string | top | bottom | <b>inner</b> | outer)]);</p>
      <ul>
        <li>The Default Location is InnerHTML</li>
        <li>If you pass in an element, an element is inserted.</li>
        <li>If you pass in a string to any place other then the inner location, we wrap it in the same tag as the siblings</li>
        <li>If you pass in a string that LOOKS like markup, we will convert it to that element and preserve its attributes</li>
      </ul>
    
  </body>
</html>

<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes"> 
<meta http-equiv="refresh"content="2;url=index.php">
<title>载入动画</title>
<style>
@-webkit-keyframes gradient{50%{background-position:100% 0}}
@keyframes gradient{50%{background-position:100% 0}}
@-webkit-keyframes img {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-360deg);
  }
}
@keyframes img {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-360deg);
    transform: rotate(-360deg);
  }
}
@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes spin-reverse {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-360deg);
  }
}
@keyframes spin-reverse {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-360deg);
    transform: rotate(-360deg);
  }
}
#loader-wrapper {
    background-image: linear-gradient(45deg, rgb(90, 54, 148) 0%, rgb(19, 189, 206) 33%, rgb(0, 148, 217) 66%, rgb(111, 199, 181) 100%);
    background-size: 400%;
    background-position: 0% 100%;
    -webkit-animation: gradient 7.5s ease-in-out infinite;
    animation: gradient 7.5s ease-in-out infinite;
}
#loader-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 10;
  overflow: hidden;
}
#loader {
  display: flex;
  position: relative;
  left: 50%;
  top: 50%;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #fff;
  animation: spin 1.7s linear infinite;
  z-index: 11;
}
#loader:before {
    content: "";
    position: absolute;
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #fff;
    animation: spin-reverse .6s linear infinite;
  }
  
#loader:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #fff;
    animation: spin 1s linear infinite;
}
#loader img {
    margin: auto;
    align-items: center;
    display: table-cell;
    vertical-align: middle;
    text-align: center;
    animation: img 1.7s linear infinite;
}
.loader{top: 76%;left:50%;-webkit-transform:translate(-50%,-50%);-mos-transform:translate(-50%,-50%);transform:translate(-50%,-50%);text-align:center;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;width: 100%;max-width: 990px;overflow:visible;z-index: 99;}.loader,.loader div{position:absolute;height:36px}.loader div{width:30px;margin: 0 20px;opacity:0;animation:move 2s linear infinite;-o-animation:move 2s linear infinite;-moz-animation:move 2s linear infinite;-webkit-animation:move 2s linear infinite;transform:rotate(180deg);-o-transform:rotate(180deg);-moz-transform:rotate(180deg);-webkit-transform:rotate(180deg);color:#fff;font-size: 2em;}.loader div:nth-child(8):before{background: #ffffff;}.loader div:nth-child(8):before,.loader div:nth-child(9):before{content:'';position:absolute;bottom: 0px;left:0;width: 10px;height: 10px;border-radius:100%;}.loader div:nth-child(9):before{background:#f2f2f2}.loader div:nth-child(10):before{bottom:-15px;height: 10px;background: #ffffff;}.loader div:after,.loader div:nth-child(10):before{content:'';position:absolute;left:0;width: 10px;border-radius:100%;}.loader div:after{bottom:-40px;height:5px;background: rgba(255,255,255,.1);}.loader div:nth-child(2){animation-delay:.2s;-o-animation-delay:.2s;-moz-animation-delay:.2s;-webkit-animation-delay:.2s}.loader div:nth-child(3){animation-delay:.4s;-o-animation-delay:.4s;-webkit-animation-delay:.4s}.loader div:nth-child(4){animation-delay:.6s;-o-animation-delay:.6s;-moz-animation-delay:.6s;-webkit-animation-delay:.6s}.loader div:nth-child(5){animation-delay:.8s;-o-animation-delay:.8s;-moz-animation-delay:.8s;-webkit-animation-delay:.8s}.loader div:nth-child(6){animation-delay:1s;-o-animation-delay:1s;-moz-animation-delay:1s;-webkit-animation-delay:1s}.loader div:nth-child(7){animation-delay:1.2s;-o-animation-delay:1.2s;-moz-animation-delay:1.2s;-webkit-animation-delay:1.2s}.loader div:nth-child(8){animation-delay:1.4s;-o-animation-delay:1.4s;-moz-animation-delay:1.4s;-webkit-animation-delay:1.4s}.loader div:nth-child(9){animation-delay:1.6s;-o-animation-delay:1.6s;-moz-animation-delay:1.6s;-webkit-animation-delay:1.6s}.loader div:nth-child(10){animation-delay:1.8s;-o-animation-delay:1.8s;-moz-animation-delay:1.8s;-webkit-animation-delay:1.8s}@keyframes move{0%{right:0;opacity:0}35%{right:41%}35%,65%{-webkit-transform:rotate(0);transform:rotate(0);opacity:1}65%{right:59%}to{right:100%;-webkit-transform:rotate(-180deg);transform:rotate(-180deg)}}@-webkit-keyframes move{0%,to{opacity:0}0%{right:0}35%{right:41%}35%,75%{-webkit-transform:rotate(0);transform:rotate(0);opacity:1}75%{right:59%}to{right:100%;-webkit-transform:rotate(-180deg);transform:rotate(-180deg);opacity:0}}

</style>
</head>
<body>

<div id="loader-wrapper">
    <div id="loader"><img src="images/w-icon.png"></div>
</div>
<div class="loader">
	<div> L </div>
	<div> O </div>
	<div> A </div>
	<div> D </div>
	<div> I </div>
	<div> N </div>
	<div> G </div>
	<div> .</div>
	<div> .</div>
	<div> .</div>
</div>
	
</body>
</html>

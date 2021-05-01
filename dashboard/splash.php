<html>
<head>
<style>
body {
  background-color: #191919;
  font-family: 'Open Sans', sans-serif;
}

.text {
  opacity: 0;
  position: absolute;
  z-index: 7;
  text-align: left;
  margin: -50px 0 0 -150px;
  width: 300px;
  height: 100px;
  top: 50%;
  left: 50%;
  font-size: 48px;
  font-weight: 700;
  -webkit-animation: on .6s ease-in-out 3.7s forwards;
  -moz-animation: on .6s ease-in-out 3.7s forwards;
  -o-animation: on .6s ease-in-out 3.7s forwards;
  animation: on .6s ease-in-out 3.7s forwards;
}
.text p {
  white-space: nowrap;
  overflow: hidden;
  width: 100%;
  -webkit-animation: type .3s steps(60, end) 3.7s;
  -moz-animation: type .3s steps(60, end) 3.7s;
  -o-animation: type .3s steps(60, end) 3.7s;
  animation: type .3s steps(60, end) 3.7s;
}
.text p:nth-child(2) {
  -webkit-animation: type2 .5s steps(60, end) 3.7s;
  -moz-animation: type2 .5s steps(60, end) 3.7s;
  -o-animation: type2 .5s steps(60, end) 3.7s;
  animation: type2 .5s steps(60, end) 3.7s;
}
.text button {
  border: 0;
  opacity: 0;
  background: #191919;
  color: #f5d300;
  border: 1px solid #191919;
  letter-spacing: 2px;
  padding: .5rem 2.5rem;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-transition: color 0.5s, background-color 0.5s;
  -moz-transition: color 0.5s, background-color 0.5s;
  -ms-transition: color 0.5s, background-color 0.5s;
  -o-transition: color 0.5s, background-color 0.5s;
  transition: color 0.5s, background-color 0.5s;
  -webkit-animation: on .6s ease-in-out 4s forwards;
  -moz-animation: on .6s ease-in-out 4s forwards;
  -o-animation: on .6s ease-in-out 4s forwards;
  animation: on .6s ease-in-out 4s forwards;
}
.text button:hover {
  background: #f5d300;
  color: #191919;
  border: 1px solid #191919;
}

.splash {
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  overflow: hidden;
}
.splash_logo {
  position: absolute;
  margin: -15px 0 0 -25px;
  top: 50vh;
  z-index: 5;
  left: 50vw;
  width: 100px;
  text-align: center;
  height: 30px;
  font-size: 26px;
  font-weight: 600;
  color: #ffffff;
  opacity: 1;
  will-change: opacity;
  -webkit-animation: logo .3s ease-in 1.5s forwards, off .6s ease-in-out 3.2s forwards;
  -moz-animation: logo .3s ease-in 1.5s forwards, off .6s ease-in-out 3.2s forwards;
  -o-animation: logo .3s ease-in 1.5s forwards, off .6s ease-in-out 3.2s forwards;
  animation: logo .3s ease-in 1.5s forwards, off .6s ease-in-out 3.2s forwards;
}
.splash_logo:before {
  display: block;
  position: absolute;
  left: 15px;
  bottom: -5px;
  width: 20px;
  height: 1px;
  background-color: #757474;
  content: "";
}
.splash_logo:after {
  display: block;
  position: absolute;
  left: 15px;
  top: -5px;
  width: 20px;
  height: 1px;
  background-color: #757474;
  content: "";
  will-change: width;
}
.splash_svg {
  position: relative;
  margin: auto;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  bottom: 0;
  right: 0;
}
.splash_svg svg {
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
}
.splash_svg svg rect {
  width: 100%;
  height: 100%;
  fill: #f5d300;
  stroke: 0;
  -webkit-clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
  clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
  -webkit-animation: expand .7s ease-in forwards 2.7s;
  -moz-animation: expand .7s ease-in forwards 2.7s;
  -o-animation: expand .7s ease-in forwards 2.7s;
  animation: expand .7s ease-in forwards 2.7s;
}
.splash_minimize {
  position: absolute;
  margin: auto;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 4;
}
.splash_minimize svg {
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
}
.splash_minimize svg rect {
  width: 100%;
  height: 100%;
  -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
  clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
  -webkit-animation: scale .2s ease-out forwards 1s, hide 1.3s ease-out forwards 1.2s;
  -moz-animation: scale .2s ease-out forwards 1s, hide 1.3s ease-out forwards 1.2s;
  -o-animation: scale .2s ease-out forwards 1s, hide 1.3s ease-out forwards 1.2s;
  animation: scale .2s ease-out forwards 1s, hide 1.3s ease-out forwards 1.2s;
}

@-webkit-keyframes scale {
  100% {
    -webkit-clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
    clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
  }
}
@-moz-keyframes scale {
  100% {
    -webkit-clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
    clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
  }
}
@-o-keyframes scale {
  100% {
    -webkit-clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
    clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
  }
}
@keyframes scale {
  100% {
    -webkit-clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
    clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
  }
}
@-webkit-keyframes hide {
  100% {
    fill: transparent;
  }
}
@-moz-keyframes hide {
  100% {
    fill: transparent;
  }
}
@-o-keyframes hide {
  100% {
    fill: transparent;
  }
}
@keyframes hide {
  100% {
    fill: transparent;
  }
}
@-webkit-keyframes off {
  100% {
    opacity: 0;
  }
}
@-moz-keyframes off {
  100% {
    opacity: 0;
  }
}
@-o-keyframes off {
  100% {
    opacity: 0;
  }
}
@keyframes off {
  100% {
    opacity: 0;
  }
}
@-webkit-keyframes on {
  100% {
    opacity: 1;
  }
}
@-moz-keyframes on {
  100% {
    opacity: 1;
  }
}
@-o-keyframes on {
  100% {
    opacity: 1;
  }
}
@keyframes on {
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes logo {
  100% {
    color: #292929;
  }
}
@-moz-keyframes logo {
  100% {
    color: #292929;
  }
}
@-o-keyframes logo {
  100% {
    color: #292929;
  }
}
@keyframes logo {
  100% {
    color: #292929;
  }
}
@-webkit-keyframes type {
  0% {
    width: 0;
  }
}
@-moz-keyframes type {
  0% {
    width: 0;
  }
}
@-o-keyframes type {
  0% {
    width: 0;
  }
}
@keyframes type {
  0% {
    width: 0;
  }
}
@-webkit-keyframes type2 {
  0% {
    width: 0;
  }
  50% {
    width: 0;
  }
  100% {
    width: 100;
  }
}
@-moz-keyframes type2 {
  0% {
    width: 0;
  }
  50% {
    width: 0;
  }
  100% {
    width: 100;
  }
}
@-o-keyframes type2 {
  0% {
    width: 0;
  }
  50% {
    width: 0;
  }
  100% {
    width: 100;
  }
}
@keyframes type2 {
  0% {
    width: 0;
  }
  50% {
    width: 0;
  }
  100% {
    width: 100;
  }
}
@-webkit-keyframes expand {
  25% {
    -webkit-clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 58vh, 45vw 58vh);
    clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
    fill: white;
  }
  50% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
    fill: #f5d300;
  }
  75% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
    fill: white;
  }
  100% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
    fill: #f5d300;
  }
}
@-moz-keyframes expand {
  25% {
    -webkit-clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 58vh, 45vw 58vh);
    clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
    fill: white;
  }
  50% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
    fill: #f5d300;
  }
  75% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
    fill: white;
  }
  100% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
    fill: #f5d300;
  }
}
@-o-keyframes expand {
  25% {
    -webkit-clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 58vh, 45vw 58vh);
    clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
    fill: white;
  }
  50% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
    fill: #f5d300;
  }
  75% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
    fill: white;
  }
  100% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
    fill: #f5d300;
  }
}
@keyframes expand {
  25% {
    -webkit-clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 58vh, 45vw 58vh);
    clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
    fill: white;
  }
  50% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
    fill: #f5d300;
  }
  75% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
    fill: white;
  }
  100% {
    -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
    clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
    fill: #f5d300;
  }
}
</style>
</head>
<body>

<div class="splash">
  <div class="splash_logo">
    OSH PRO
  </div>
  <div class="splash_svg">
    <svg width="100%" height="100%">
      <rect width="100%" height="100%" >
      </svg>
  </div>
  <div class="splash_minimize">
    <svg width="100%" height="100%">
      <rect width="100%" height="100%" >
      </svg>
  </div>
</div>
<div class="text">
  <p>Welcome to OSH PRO</p>
  <p>by SOCSO</p>
  <button>Start</button>
</div>
</body>
</html>
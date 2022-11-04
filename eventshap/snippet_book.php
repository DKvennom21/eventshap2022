<?php 
$id=$_GET['id'];
$bid=$_GET['bid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Success Confirmation Popup</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
		font-family: 'Varela Round', sans-serif;
		background-color: green;
	}
	.modal-confirm {		
		color: #636363;
		width: 325px;
		margin: 30px auto;
	}
	.modal-confirm .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-confirm .modal-header {
		border-bottom: none;   
        position: relative;
	}
	.modal-confirm h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -15px;
	}
	.modal-confirm .form-control, .modal-confirm .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-confirm .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-confirm .modal-footer {
		border: none;
		text-align: center;
		border-radius: 5px;
		font-size: 13px;
	}	
	.modal-confirm .icon-box {
		color: #fff;		
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -70px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #82ce34;
		padding: 15px;
		text-align: center;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.modal-confirm .icon-box i {
		font-size: 58px;
		position: relative;
		top: 3px;
	}
	.modal-confirm.modal-dialog {
		margin-top: 160px;
	}
    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
		background: #82ce34;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-confirm .btn:hover, .modal-confirm .btn:focus {
		background: #6fb32b;
		outline: none;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;

	/* for firework button */
	
	}
</style>
</head>
<body>
<!-- Modal HTML -->
<div class="modal-dialog modal-confirm">
    <div class="modal-content">
    	<div class="modal-header">
          	<div class="icon-box">
            	<i class="material-icons">&#xE876;</i>
          	</div>				
          	<h4 class="modal-title">Awesome!</h4>	
        </div>
        <div class="modal-body">
          	<p class="text-center">Booked Succcessfully.</p>
        </div>
        <div class="modal-footer">
          	<a href="index_user.php?id=<?php echo $id; ?>"><button class="btn btn-success btn-block" data-dismiss="modal">Go Home</button></a>
			  <br>
			 <a href="pdf.php?id=<?php echo $id; ?>&&bid=<?php echo $bid; ?>"><button class="btn btn-success btn-block" data-dismiss="modal">Print Receipt</button></a> 
        </div>
    </div>
</div>       
</body>
</html>    
 <!-- some trial runs -->
 <!-- <style> -->
	<!-- /* @keyframes loading {
  0%   { cy: 10; }
  25%  { cy: 3; }
  50%  { cy: 10; }
}

body {
  -webkit-font-smoothing: antialiased;
  background-color: #f4f7ff;
}

canvas {
  height: 100vh;
  pointer-events: none;
  position: fixed;
  width: 100%;
  z-index: 2;
}

button {
  background: none;
  border: none;
  color: #f4f7ff;
  cursor: pointer;
  font-family: 'Quicksand', sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  left: 50%;
  outline: none;
  overflow: hidden;
  padding: 0 10px;
  position: fixed;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 190px;
  -webkit-tap-highlight-color: transparent;
  z-index: 1;

  &::before {
    background: #1f2335;
    border-radius: 50px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .4) inset;
    content: '';
    display: block;
    height: 100%;
    margin: 0 auto;
    position: relative;
    transition: width .2s cubic-bezier(.39,1.86,.64,1) .3s;
    width: 100%;
  }
}

// READY STATE
button.ready {
  .submitMessage svg {
    opacity: 1;
    top: 1px;
    transition: top .4s ease 600ms, opacity .3s linear 600ms;
  }

  .submitMessage .button-text span {
    top: 0;
    opacity: 1;
    transition: all .2s ease calc(var(--dr) + 600ms);
  }
}

// LOADING STATE
button.loading {
  &::before {
    transition: width .3s ease;
    width: 80%;
  }

  .loadingMessage {
    opacity: 1;
  }

  .loadingCircle {
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-name: loading;
    cy: 10;
  }
}

// COMPLETE STATE
button.complete {
  .submitMessage svg {
    top: -30px;
    transition: none;
  }

  .submitMessage .button-text span {
    top: -8px;
    transition: none;
  }

  .loadingMessage {
    top: 80px;
  }

  .successMessage .button-text span {
    left: 0;
    opacity: 1;
    transition: all .2s ease calc(var(--d) + 1000ms);
  }

  .successMessage svg { 
    stroke-dashoffset: 0;
    transition: stroke-dashoffset .3s ease-in-out 1.4s;
  }
}

.button-text span {
  opacity: 0;
  position: relative;
}

.message {
  left: 50%;
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
}

.message svg {
  display: inline-block;
  fill: none;
  margin-right: 5px;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-width: 2;
}

.submitMessage {
  .button-text span {
    top: 8px;
    transition: all .2s ease var(--d);
  }

  svg {
    color: #5c86ff;
    margin-left: -1px;
    opacity: 0;
    position: relative;
    top: 30px;
    transition: top .4s ease, opacity .3s linear;
    width: 14px;
  }
}

.loadingMessage {
  opacity: 0;
  transition: opacity .3s linear .3s, top .4s cubic-bezier(.22,0,.41,-0.57);

  svg {
    fill: #5c86ff;
    margin: 0;
    width: 22px;
  }
}

.successMessage {
  .button-text span {
    left: 5px;
    transition: all .2s ease var(--dr);
  }
  
  svg {
    color: #5cffa1;
    stroke-dasharray: 20;
    stroke-dashoffset: 20;
    transition: stroke-dashoffset .3s ease-in-out;
    width: 14px;
  }
}

.loadingCircle:nth-child(2) { animation-delay: .1s }
.loadingCircle:nth-child(3) { animation-delay: .2s }


/* Website Link */
.website-link {
  background: #f8faff;
  border-radius: 50px 0 0 50px;
  bottom: 30px;
  color: #324b77;
  cursor: pointer;
  font-family: 'Montserrat', sans-serif;
  font-weight: 600;
  height: 34px;
  filter: drop-shadow(2px 3px 4px rgba(#000, .1));
  padding: 0 20px 0 40px;
  position: fixed;
  right: 0;
  text-align: left;
  text-decoration: none;

  &__icon {
    left: -10px;
    position: absolute;
    top: -12px;
    width: 44px;
  }

  &__name {
    display: block;
    font-size: 14px;
    line-height: 14px;
    margin: 5px 0 3px;
  }

  &__last-name {
    color: #55bada;
  }

  &__message {
    color: #8aa8c5;
    display: block;
    font-size: 7px;
    line-height: 7px;
  }
}
</style> -->
<!-- <script>
	// ammount to add on each button press
const confettiCount = 20
const sequinCount = 10

// "physics" variables
const gravityConfetti = 0.3
const gravitySequins = 0.55
const dragConfetti = 0.075
const dragSequins = 0.02
const terminalVelocity = 3

// init other global elements
const button = document.getElementById('button')
var disabled = false
const canvas = document.getElementById('canvas')
const ctx = canvas.getContext('2d')
canvas.width = window.innerWidth
canvas.height = window.innerHeight
let cx = ctx.canvas.width / 2
let cy = ctx.canvas.height / 2

// add Confetto/Sequin objects to arrays to draw them
let confetti = []
let sequins = []

// colors, back side is darker for confetti flipping
const colors = [
  { front : '#7b5cff', back: '#6245e0' }, // Purple
  { front : '#b3c7ff', back: '#8fa5e5' }, // Light Blue
  { front : '#5c86ff', back: '#345dd1' }  // Darker Blue
]

// helper function to pick a random number within a range
randomRange = (min, max) => Math.random() * (max - min) + min

// helper function to get initial velocities for confetti
// this weighted spread helps the confetti look more realistic
initConfettoVelocity = (xRange, yRange) => {
  const x = randomRange(xRange[0], xRange[1])
  const range = yRange[1] - yRange[0] + 1
  let y = yRange[1] - Math.abs(randomRange(0, range) + randomRange(0, range) - range)
  if (y >= yRange[1] - 1) {
    // Occasional confetto goes higher than the max
    y += (Math.random() < .25) ? randomRange(1, 3) : 0
  }
  return {x: x, y: -y}
}

// Confetto Class
function Confetto() {
  this.randomModifier = randomRange(0, 99)
  this.color = colors[Math.floor(randomRange(0, colors.length))]
  this.dimensions = {
    x: randomRange(5, 9),
    y: randomRange(8, 15),
  }
  this.position = {
    x: randomRange(canvas.width/2 - button.offsetWidth/4, canvas.width/2 + button.offsetWidth/4),
    y: randomRange(canvas.height/2 + button.offsetHeight/2 + 8, canvas.height/2 + (1.5 * button.offsetHeight) - 8),
  }
  this.rotation = randomRange(0, 2 * Math.PI)
  this.scale = {
    x: 1,
    y: 1,
  }
  this.velocity = initConfettoVelocity([-9, 9], [6, 11])
}
Confetto.prototype.update = function() {
  // apply forces to velocity
  this.velocity.x -= this.velocity.x * dragConfetti
  this.velocity.y = Math.min(this.velocity.y + gravityConfetti, terminalVelocity)
  this.velocity.x += Math.random() > 0.5 ? Math.random() : -Math.random()
  
  // set position
  this.position.x += this.velocity.x
  this.position.y += this.velocity.y

  // spin confetto by scaling y and set the color, .09 just slows cosine frequency
  this.scale.y = Math.cos((this.position.y + this.randomModifier) * 0.09)    
}

// Sequin Class
function Sequin() {
  this.color = colors[Math.floor(randomRange(0, colors.length))].back,
  this.radius = randomRange(1, 2),
  this.position = {
    x: randomRange(canvas.width/2 - button.offsetWidth/3, canvas.width/2 + button.offsetWidth/3),
    y: randomRange(canvas.height/2 + button.offsetHeight/2 + 8, canvas.height/2 + (1.5 * button.offsetHeight) - 8),
  },
  this.velocity = {
    x: randomRange(-6, 6),
    y: randomRange(-8, -12)
  }
}
Sequin.prototype.update = function() {
  // apply forces to velocity
  this.velocity.x -= this.velocity.x * dragSequins
  this.velocity.y = this.velocity.y + gravitySequins
  
  // set position
  this.position.x += this.velocity.x
  this.position.y += this.velocity.y   
}

// add elements to arrays to be drawn
initBurst = () => {
  for (let i = 0; i < confettiCount; i++) {
    confetti.push(new Confetto())
  }
  for (let i = 0; i < sequinCount; i++) {
    sequins.push(new Sequin())
  }
}

// draws the elements on the canvas
render = () => {
  ctx.clearRect(0, 0, canvas.width, canvas.height)
  
  confetti.forEach((confetto, index) => {
    let width = (confetto.dimensions.x * confetto.scale.x)
    let height = (confetto.dimensions.y * confetto.scale.y)
    
    // move canvas to position and rotate
    ctx.translate(confetto.position.x, confetto.position.y)
    ctx.rotate(confetto.rotation)

    // update confetto "physics" values
    confetto.update()
    
    // get front or back fill color
    ctx.fillStyle = confetto.scale.y > 0 ? confetto.color.front : confetto.color.back
    
    // draw confetto
    ctx.fillRect(-width / 2, -height / 2, width, height)
    
    // reset transform matrix
    ctx.setTransform(1, 0, 0, 1, 0, 0)

    // clear rectangle where button cuts off
    if (confetto.velocity.y < 0) {
      ctx.clearRect(canvas.width/2 - button.offsetWidth/2, canvas.height/2 + button.offsetHeight/2, button.offsetWidth, button.offsetHeight)
    }
  })

  sequins.forEach((sequin, index) => {  
    // move canvas to position
    ctx.translate(sequin.position.x, sequin.position.y)
    
    // update sequin "physics" values
    sequin.update()
    
    // set the color
    ctx.fillStyle = sequin.color
    
    // draw sequin
    ctx.beginPath()
    ctx.arc(0, 0, sequin.radius, 0, 2 * Math.PI)
    ctx.fill()

    // reset transform matrix
    ctx.setTransform(1, 0, 0, 1, 0, 0)

    // clear rectangle where button cuts off
    if (sequin.velocity.y < 0) {
      ctx.clearRect(canvas.width/2 - button.offsetWidth/2, canvas.height/2 + button.offsetHeight/2, button.offsetWidth, button.offsetHeight)
    }
  })

  // remove confetti and sequins that fall off the screen
  // must be done in seperate loops to avoid noticeable flickering
  confetti.forEach((confetto, index) => {
    if (confetto.position.y >= canvas.height) confetti.splice(index, 1)
  })
  sequins.forEach((sequin, index) => {
    if (sequin.position.y >= canvas.height) sequins.splice(index, 1)
  })

  window.requestAnimationFrame(render)
}

// cycle through button states when clicked
clickButton = () => {
  if (!disabled) {
    disabled = true
    // Loading stage
    button.classList.add('loading')
    button.classList.remove('ready')
    setTimeout(() => {
      // Completed stage
      button.classList.add('complete')
      button.classList.remove('loading')
      setTimeout(() => {
        window.initBurst()
        setTimeout(() => {
          // Reset button so user can select it again
          disabled = false
          button.classList.add('ready')
          button.classList.remove('complete')
        }, 4000)
      }, 320)
    }, 1800)
  }
}

// re-init canvas if the window size changes
resizeCanvas = () => {
  canvas.width = window.innerWidth
  canvas.height = window.innerHeight
  cx = ctx.canvas.width / 2
  cy = ctx.canvas.height / 2
}

// resize listenter
window.addEventListener('resize', () => {
  resizeCanvas()
})

// click button on spacebar or return keypress
document.body.onkeyup = (e) => {
  if (e.keyCode == 13 || e.keyCode == 32) {
    clickButton()
  }
}

// Set up button text transition timings on page load
textElements = button.querySelectorAll('.button-text')
textElements.forEach((element) => {
  characters = element.innerText.split('')
  let characterHTML = ''
  characters.forEach((letter, index) => {
    characterHTML += `<span class="char${index}" style="--d:${index * 30}ms; --dr:${(characters.length - index - 1) * 30}ms;">${letter}</span>`
  })
  element.innerHTML = characterHTML
})

// kick off the render loop
window.initBurst()
render()

</script>

<button id="button" class="ready" onclick="clickButton();">
  
  <div class="message submitMessage">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 12.2">
      <polyline stroke="currentColor" points="2,7.1 6.5,11.1 11,7.1 "/>
      <line stroke="currentColor" x1="6.5" y1="1.2" x2="6.5" y2="10.3"/>
    </svg> <span class="button-text">Submit</span>
  </div>
  
  <div class="message loadingMessage">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 17">
      <circle class="loadingCircle" cx="2.2" cy="10" r="1.6"/>
      <circle class="loadingCircle" cx="9.5" cy="10" r="1.6"/>
      <circle class="loadingCircle" cx="16.8" cy="10" r="1.6"/>
    </svg>
  </div>
  
  <div class="message successMessage">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 11">
      <polyline stroke="currentColor" points="1.4,5.8 5.1,9.5 11.6,2.1 "/>
    </svg> <span class="button-text">Success</span>
  </div>
</button>

<canvas id="canvas"></canvas> -->
 
 <!-- some trial runs -->
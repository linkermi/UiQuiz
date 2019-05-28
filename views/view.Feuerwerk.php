
<html>
    <head>
       
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
</div>

<audio style="display:none" preload="auto" autoplay id="audio" controls source src="https://aredir.nixcdn.com/Unv_Audio71/HappyNewYear-ABBA-1595921.mp3?st=g1zQ-Zu8tL--3qjPlRIq6w&amp;e=1546353858">
</audio>
        <style>
       @import url('https://fonts.googleapis.com/css?family=Allerta+Stencil');
*{
  font-family: 'Allerta Stencil', sans-serif;
}
body{
  margin:0;
  padding:0;
  overflow:hidden;
  height:100vh; 
  background: #fff;
}
p{
  position:fixed;
  width:100%;
  text-align:center;
  color:rgba(255,255,255,.15);
  left:50%;
  top:50%;
  transform:translate(-50%,-50%);
  font-size:60px;
}
button{
  background:#FF0000;
  border:0px;
  border-radius:4px;
  color:#fff;
  padding: 5px 15px;
  margin-bottom:5px;
  cursor:pointer;
  transition:.3s all;
  outline:none;
  box-shadow:0px 0px 5px #ff0000;
}
button:hover{
  background:#FF3030;
}
button:active{
  transform:translate(-2px, 2px);
}
.option{
  position:fixed;
  left:40px;
  bottom:40px;
}
label{
  fonzt-size:14px;
  color:#fff;
}
input[type="range"]{
  -webkit-appearance:none;
  appearance:none;
  height:5px;
  margin-top:20px;
/*   background:#00C5CD; */
  background-image:linear-gradient(45deg ,#db0094, #0000ff, #ffff00, #ff0000, #db0094, #0000ff, #ffff00, #ff0000);
  outline:none;
  cursor:pointer;
  width:200px;
  border-radius:10px;
  border:1px solid #fff;
  background-size:400%;
  animation: animationBackground 20s infinite;
}
input[type="range"]::-webkit-slider-thumb{
  -webkit-appearance: none;
  height: 20px;
  width: 20px;
  margin-top:-1px;
  border-radius:50%;
  border:3px solid #fff;
  box-shadow:0px 0px 5px 2px #fff;
  background-image:linear-gradient(0deg ,#db0094, #0000ff, #ffff00, #ff0000, #db0094, #0000ff, #ffff00, #ff0000);
}
input[type="range"]::-webkit-slider-thumb:active{
  background:white;
}
input[type="range"]::slider-thumb{
  -webkit-appearance: none;
  height: 20px;
  width: 20px;
  margin-top:-1px;
  border-radius:50%;
  border:3px solid #fff;
  box-shadow:0px 0px 5px 2px #fff;
  background-image:linear-gradient(0deg ,#db0094, #0000ff, #ffff00, #ff0000, #db0094, #0000ff, #ffff00, #ff0000);
}

@keyframes animationBackground{
  0%{
    background-position: 0 0;
  }
  50%{
    background-position: 300% 0;
  }
  100%{
    background-position: 0 0;
  }
}
</style>
<script>
document.addEventListener("DOMContentLoaded",function(){
  var audio = document.getElementById('audio');
  audio.play();
  
  var canvas = document.createElement("canvas");
  var c = canvas.getContext("2d");
  
  document.body.appendChild(canvas);
  
  canvas.width = window.innerWidth;
  canvas.height = 2000;
  
  var Reset,Size,Number,Fill;
  
  Reset = document.querySelector("#Reset-Config");
  Size = document.querySelector("#Size");
  Number = document.querySelector("#Number");
  Fill = document.querySelector("#Fill");
  
  const config = {
    size:3,
    number:20,
    fill:.1
  }
  
  const ColorArray = [
              "#ffffff",
              "#FF0000",
              "#33FF33",
              "#CCFF00",
              "#FF9900",
              "#3399FF",
              "#FF3399",
              "#CC0066",
              "#00FF00"];

  document.addEventListener('resize',function(){
     canvas.width = window.innerWidth;
     canvas.height = window.innerHeight;
  });
  document.addEventListener('click',function(){
    audio.play();
  });
  Size.addEventListener("change",function(){
    config.size = Size.value;
  });
  Number.addEventListener("change",function(){
    config.number = Number.value;
  });
  Fill.addEventListener("change",function(){
    config.fill = "."+Fill.value;
  });
  Reset.addEventListener("click",function(){
    config.size = 3;
    config.number = 20;
    config.fill = .1;
    Size.value = 3;
    Number.value = 20;
    Fill.value = 1;
  });
  /**FireWork**/
  function FireWork(){
    this.radius = config.size;
    this.x = canvas.width / 2;
    this.y = canvas.height;
    this.color = ColorArray[Math.floor(Math.random() * ColorArray.length)];
    this.velocity = {
      x: Math.random()*6 - 3,
      y: Math.random()*3 + 3
    }
    this.maxY = Math.random() * canvas.height / 4 + canvas.height/10;
    this.life = false;
  }
  
  FireWork.prototype.draw = function(c){
    c.beginPath();
    c.arc(this.x, this.y, this.radius, 0, Math.PI*2);
    c.fillStyle = this.color;
    c.fill()
    c.closePath();
  }
  FireWork.prototype.maximumY = function(){
    if(this.y <= this.maxY){
      this.life = true; 
      for(let i = 0; i < 10; i++){
        SparkArray.push(new Spark(this.x, this.y, this.radius, this.color));
      }
    }
    if(this.x <= 0 || this.x >= canvas.width){
      this.life = true; 
      for(let i = 0; i < 10; i++){
        SparkArray.push(new Spark(this.x, this.y, this.radius, this.color));
      }
    }
  }
  
  FireWork.prototype.update = function(c){
    this.y -= this.velocity.y;
    this.x += this.velocity.x
    this.maximumY();
    this.draw(c)
  }
  /**end firework**/
  /**Spark**/
  
  function Spark(x, y, radius, color){
    this.x = x;
    this.y = y;
    this.radius = radius/2;
    this.color = color;
    this.velocity = {
      x: Math.random()*3 - 1,
      y: Math.random()*3 - 1
    }
    this.friction = 0.015;
    this.life = 150;
  }
  
  Spark.prototype.draw = function(c){
    c.beginPath();
    c.arc(this.x, this.y, this.radius, 0, Math.PI*2);
    c.fillStyle = this.color;
    c.fill();
    c.closePath();
  }
  Spark.prototype.update = function(c){
    this.velocity.y -= this.friction;
    this.life -= 1;
    this.y -= this.velocity.y;
    this.x += this.velocity.x;
    this.draw(c);
  }
  /**end Spark**/
    
  var FireWorkArray = [];
  var SparkArray = [];
  function init(){
    if(FireWorkArray.length < config.number)
      FireWorkArray.push(new FireWork());
  }
  
  function animate(){
    window.requestAnimationFrame(animate);
    c.fillStyle = `rgba(0,0,0,${config.fill})`; 
    c.fillRect(0, 0, canvas.width, canvas.height);
    
    FireWorkArray.forEach(function(fw, index){
      fw.update(c);
      if(fw.life)
        FireWorkArray.splice(index,1);
    });
    SparkArray.forEach(function(s, index){
      if(s.life <= 0)
        SparkArray.splice(index,1);
      s.update(c);
    });
    init();
    console.log(SparkArray.length);
  }
  
  animate();
  
});

    </script>
        <?php
        // put your code here
        ?>
    </body>
</html>

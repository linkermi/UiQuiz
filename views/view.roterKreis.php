<html>
  <head>
    
  </head>
  <body>
              <canvas id="fireworks"></canvas>

<script id="vertex" type="x-shader/x-fragment">
  attribute vec3 position;
  void main(void) {
    gl_Position = vec4(position, 1.0);
  }
</script>

<script id="fragment" type="x-shader/x-fragment">
precision mediump float;

uniform float u_time;
uniform vec2  u_mouse;
uniform vec2  u_resolution;

float rand(vec2 co){
    return fract(sin(dot(co.xy ,vec2(12.9898,78.233))) * 43758.5453);
}

void main(void){

   	vec2 m = vec2( u_mouse.x * 2.0 - 1.0, - u_mouse.y * 2.0 + 1.0);
   	vec2 p = (gl_FragCoord.xy * 2.0 - u_resolution ) / min(u_resolution.x, u_resolution.y);


      float maxValue = 0.0;
      
      for (int i = 0; i < 10; i++) {
         float radNum = 0.05 + 0.01 * float(i) * float(i);
         float u = sin((atan(p.y, p.x) + u_time * 0.5) * 20.0) * (0.01 + 0.05 *rand(gl_FragColor.xy));
         float t = 0.01 / abs(radNum+ u - length(p));

         if( t > maxValue ) {
            maxValue = t;
         }
      }

   
      gl_FragColor = vec4(vec3(maxValue), 1.0);
}
</script>
        
<style>
    html,
body {
  margin: 0;
  padding: 0;
}
</style>

<script>
    const fps = 1000 / 30;
const el = document.querySelector('#fireworks')
el.width = window.innerWidth
el.height = window.innerHeight

const gl = el.getContext('webgl')

// 参数为gl.VERTEX_SHADER 或 gl.FRAGMENT_SHADER
// gl.VERTEX_SHADER：顶点着色器
// gl.FRAGMENT_SHADER：片元着色器
const vertexShader = gl.createShader(gl.VERTEX_SHADER)
// glsl程序源码
gl.shaderSource(vertexShader, document.getElementById('vertex').text);
// 编译glsl，成为二进制数据
gl.compileShader(vertexShader);

const fragmentShader = gl.createShader(gl.FRAGMENT_SHADER)
gl.shaderSource(fragmentShader, document.getElementById('fragment').text)
gl.compileShader(fragmentShader)

// 创建着色器程序
const program = gl.createProgram()
gl.attachShader(program, vertexShader)
gl.attachShader(program, fragmentShader)
gl.linkProgram(program)
gl.useProgram(program)

const uniLocation = new Array()
uniLocation[0] = gl.getUniformLocation(program, "u_time");
uniLocation[1] = gl.getUniformLocation(program, "u_mouse");
uniLocation[2] = gl.getUniformLocation(program, "u_resolution")

gl.clearColor(0.0, 0.0, 0.0, 1.0)

const startTime = new Date().getTime()
const mx = 0.5;
const my = 0.5;
const cw = window.innerWidth
const ch = window.innerHeight

const position = [
  -1.0, 1.0, 0.0,
  1.0, 1.0, 0.0,
  -1.0, -1.0, 0.0,
  1.0, -1.0, 0.0
]

const index = [
  0, 2, 1,
  1, 2, 3
]

const vPosition = gl.createBuffer();
gl.bindBuffer(gl.ARRAY_BUFFER, vPosition)
gl.bufferData(gl.ARRAY_BUFFER, new Float32Array(position), gl.STATIC_DRAW)
gl.bindBuffer(gl.ARRAY_BUFFER, null)

const vIndex = gl.createBuffer()
gl.bindBuffer(gl.ELEMENT_ARRAY_BUFFER, vIndex);
gl.bufferData(gl.ELEMENT_ARRAY_BUFFER, new Int16Array(index), gl.STATIC_DRAW);
gl.bindBuffer(gl.ELEMENT_ARRAY_BUFFER, null);

const vAttLocation = gl.getAttribLocation(program, "position")

gl.bindBuffer(gl.ARRAY_BUFFER, vPosition)
gl.bindBuffer(gl.ELEMENT_ARRAY_BUFFER, vIndex)
gl.enableVertexAttribArray(vAttLocation)
gl.vertexAttribPointer(vAttLocation, 3, gl.FLOAT, false, 0, 0)

render()

function render() {
  time = (new Date().getTime() - startTime) * 0.001

  gl.clear(gl.COLOR_BUFFER_BIT);

  gl.uniform1f(uniLocation[0], time)
  gl.uniform2fv(uniLocation[1], [mx, my])
  gl.uniform2fv(uniLocation[2], [cw, ch])

  // 渲染图元（类型，数量，缓冲类型，缓冲区偏移量）
  // 类型：gl.TRIANGLES-三角形
  // 类型：gl.POINTS-三角形
  // 缓冲区：todo
  gl.drawElements(gl.TRIANGLES, 6, gl.UNSIGNED_SHORT, 0)
  gl.flush();

  setTimeout(render, fps);
}

function createProgram(vs, fs) {
  var program = gl.createProgram();

  gl.attachShader(program, vs);
  gl.attachShader(program, fs);

  gl.linkProgram(program);

  if (gl.getProgramParameter(program, gl.LINK_STATUS)) {
    gl.useProgram(program);
    return program;
  } else {
    return null;
  }
}


window.addEventListener("resize", function (e) {
  el.width = window.innerHeigth;
  el.height = window.innerWidth;
});
</script>
      
      
  </body>
    
</html>


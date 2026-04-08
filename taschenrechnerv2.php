<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coding Karl Rechner</title>

<style>
body{
font-family: Arial, sans-serif;
background: linear-gradient(135deg,#0f172a,#1e3a8a);
display:flex;
justify-content:center;
align-items:center;
height:100vh;
margin:0;
color:white;
}

.calculator{
background:#111827;
padding:20px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,0.5);
width:280px;
border:2px solid #3b82f6;
}

.brand{
text-align:center;
font-size:22px;
font-weight:bold;
color:#3b82f6;
margin-bottom:10px;
}

.subtitle{
text-align:center;
font-size:12px;
color:#9ca3af;
margin-bottom:15px;
}

#display{
width:100%;
height:55px;
font-size:26px;
text-align:right;
margin-bottom:15px;
padding:10px;
box-sizing:border-box;
border:none;
border-radius:8px;
background:#020617;
color:white;
}

.buttons{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:8px;
}

button{
height:50px;
font-size:18px;
border:none;
border-radius:8px;
background:#1f2937;
color:white;
cursor:pointer;
}

button:hover{
background:#374151;
}

.operator{
background:#2563eb;
}

.operator:hover{
background:#1d4ed8;
}

.equal{
grid-column:span 2;
background:#22c55e;
}

.equal:hover{
background:#16a34a;
}

.clear{
background:#ef4444;
}

.clear:hover{
background:#dc2626;
}

.footer{
text-align:center;
font-size:11px;
margin-top:15px;
color:#6b7280;
}
</style>

</head>

<body>

<div class="calculator">

<div class="brand">💻 Coding Karl</div>
<div class="subtitle">Basic Calculator v1.0</div>

<input type="text" id="display" disabled>

<div class="buttons">

<button onclick="appendValue('7')">7</button>
<button onclick="appendValue('8')">8</button>
<button onclick="appendValue('9')">9</button>
<button class="operator" onclick="appendValue('/')">÷</button>

<button onclick="appendValue('4')">4</button>
<button onclick="appendValue('5')">5</button>
<button onclick="appendValue('6')">6</button>
<button class="operator" onclick="appendValue('*')">×</button>

<button onclick="appendValue('1')">1</button>
<button onclick="appendValue('2')">2</button>
<button onclick="appendValue('3')">3</button>
<button class="operator" onclick="appendValue('-')">−</button>

<button onclick="appendValue('0')">0</button>
<button onclick="appendValue('.')">.</button>
<button class="clear" onclick="clearDisplay()">C</button>
<button class="operator" onclick="appendValue('+')">+</button>

<button class="equal" onclick="calculate()">=</button>

</div>

<div class="footer">
© Coding Karl
</div>

</div>

<script>

function appendValue(value){
document.getElementById("display").value += value;
}

function clearDisplay(){
document.getElementById("display").value="";
}

function calculate(){
const display=document.getElementById("display");

try{
display.value=eval(display.value);
}
catch{
display.value="Error";
}
}

</script>

</body>
</html>
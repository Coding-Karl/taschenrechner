<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coding Karl Rechner Pro</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #0f172a, #1e3a8a);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      color: white;
    }

    .calculator {
      background: #111827;
      padding: 20px;
      border-radius: 18px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
      width: 360px;
      border: 2px solid #3b82f6;
    }

    .brand {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      color: #3b82f6;
      margin-bottom: 5px;
    }

    .subtitle {
      text-align: center;
      font-size: 12px;
      color: #9ca3af;
      margin-bottom: 15px;
    }

    #display {
      width: 100%;
      height: 60px;
      font-size: 26px;
      text-align: right;
      margin-bottom: 15px;
      padding: 10px;
      box-sizing: border-box;
      border: none;
      border-radius: 10px;
      background: #020617;
      color: white;
      outline: none;
    }

    .buttons {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 8px;
    }

    button {
      height: 48px;
      font-size: 16px;
      border: none;
      border-radius: 10px;
      background: #1f2937;
      color: white;
      cursor: pointer;
      transition: 0.2s;
    }

    button:hover {
      background: #374151;
    }

    .operator {
      background: #2563eb;
    }

    .operator:hover {
      background: #1d4ed8;
    }

    .scientific {
      background: #7c3aed;
    }

    .scientific:hover {
      background: #6d28d9;
    }

    .clear {
      background: #ef4444;
    }

    .clear:hover {
      background: #dc2626;
    }

    .equal {
      background: #22c55e;
      grid-column: span 2;
    }

    .equal:hover {
      background: #16a34a;
    }

    .footer {
      text-align: center;
      font-size: 11px;
      margin-top: 15px;
      color: #6b7280;
    }
  </style>
</head>
<body>
  <div class="calculator">
    <div class="brand">💻 Coding Karl</div>
    <div class="subtitle">Scientific Calculator Pro v5.0</div>

    <input type="text" id="display" disabled />

    <div class="buttons">
      <button class="scientific" onclick="appendValue('(')">(</button>
      <button class="scientific" onclick="appendValue(')')">)</button>
      <button class="scientific" onclick="appendPi()">π</button>
      <button class="scientific" onclick="appendE()">e</button>
      <button class="clear" onclick="clearDisplay()">C</button>

      <button class="scientific" onclick="sin()">sin</button>
      <button class="scientific" onclick="cos()">cos</button>
      <button class="scientific" onclick="tan()">tan</button>
      <button class="scientific" onclick="ln()">ln</button>
      <button class="scientific" onclick="log10Calc()">log</button>

      <button class="scientific" onclick="sqrt()">√</button>
      <button class="scientific" onclick="power2()">x²</button>
      <button class="scientific" onclick="appendValue('**')">xʸ</button>
      <button class="scientific" onclick="inverse()">1/x</button>
      <button class="scientific" onclick="absValue()">|x|</button>

      <button onclick="appendValue('7')">7</button>
      <button onclick="appendValue('8')">8</button>
      <button onclick="appendValue('9')">9</button>
      <button class="operator" onclick="appendValue('/')">÷</button>
      <button class="scientific" onclick="percent()">%</button>

      <button onclick="appendValue('4')">4</button>
      <button onclick="appendValue('5')">5</button>
      <button onclick="appendValue('6')">6</button>
      <button class="operator" onclick="appendValue('*')">×</button>
      <button class="scientific" onclick="factorial()">x!</button>

      <button onclick="appendValue('1')">1</button>
      <button onclick="appendValue('2')">2</button>
      <button onclick="appendValue('3')">3</button>
      <button class="operator" onclick="appendValue('-')">−</button>
      <button class="scientific" onclick="backspace()">⌫</button>

      <button onclick="appendValue('0')">0</button>
      <button onclick="appendValue('.')">.</button>
      <button class="equal" onclick="calculate()">=</button>
      <button class="operator" onclick="appendValue('+')">+</button>
    </div>

    <div class="footer">© Coding Karl</div>
  </div>

  <script>
    const display = document.getElementById("display");

    function appendValue(value) {
      display.value += value;
    }

    function clearDisplay() {
      display.value = "";
    }

    function backspace() {
      display.value = display.value.slice(0, -1);
    }

    function calculate() {
      try {
        display.value = eval(display.value);
      } catch {
        display.value = "Fehler";
      }
    }

    function getValue() {
      return parseFloat(display.value);
    }

    function sqrt() {
      try {
        display.value = Math.sqrt(getValue());
      } catch {
        display.value = "Fehler";
      }
    }

    function power2() {
      try {
        const value = getValue();
        display.value = value ** 2;
      } catch {
        display.value = "Fehler";
      }
    }

    function inverse() {
      try {
        const value = getValue();
        if (value === 0) {
          display.value = "Fehler";
          return;
        }
        display.value = 1 / value;
      } catch {
        display.value = "Fehler";
      }
    }

    function absValue() {
      try {
        display.value = Math.abs(getValue());
      } catch {
        display.value = "Fehler";
      }
    }

    function percent() {
      try {
        display.value = getValue() / 100;
      } catch {
        display.value = "Fehler";
      }
    }

    function appendPi() {
      display.value += Math.PI;
    }

    function appendE() {
      display.value += Math.E;
    }

    function ln() {
      try {
        display.value = Math.log(getValue());
      } catch {
        display.value = "Fehler";
      }
    }

    function log10Calc() {
      try {
        display.value = Math.log10(getValue());
      } catch {
        display.value = "Fehler";
      }
    }

    function sin() {
      try {
        const grad = getValue();
        display.value = Math.sin(grad * Math.PI / 180).toFixed(10);
      } catch {
        display.value = "Fehler";
      }
    }

    function cos() {
      try {
        const grad = getValue();
        display.value = Math.cos(grad * Math.PI / 180).toFixed(10);
      } catch {
        display.value = "Fehler";
      }
    }

    function tan() {
      try {
        const grad = getValue();
        display.value = Math.tan(grad * Math.PI / 180).toFixed(10);
      } catch {
        display.value = "Fehler";
      }
    }

    function factorial() {
      try {
        let n = getValue();

        if (n < 0 || !Number.isInteger(n)) {
          display.value = "Fehler";
          return;
        }

        let result = 1;
        for (let i = 2; i <= n; i++) {
          result *= i;
        }

        display.value = result;
      } catch {
        display.value = "Fehler";
      }
    }
  </script>
</body>
</html>
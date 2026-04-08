<!DOCTYPE html>
<html>
    <head>
        <title>Taschenrechner</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="styles.css"/>


    </head>

    <body>
      <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .calculator {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      width: 260px;
    }

    #display {
      width: 100%;
      height: 50px;
      font-size: 24px;
      text-align: right;
      margin-bottom: 15px;
      padding: 10px;
      box-sizing: border-box;
    }

    .buttons {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    }

    button {
      height: 50px;
      font-size: 20px;
      border: none;
      border-radius: 8px;
      background: #e0e0e0;
      cursor: pointer;
    }

    button:hover {
      background: #d0d0d0;
    }

    .equal {
      grid-column: span 2;
      background: #4caf50;
      color: white;
    }

    .equal:hover {
      background: #43a047;
    }

    .clear {
      background: #f44336;
      color: white;
    }

    .clear:hover {
      background: #e53935;
    }
    </style>
 <div class="calculator">
    <input type="text" id="display" disabled />
    <div class="buttons">
      <button onclick="appendValue('7')">7</button>
      <button onclick="appendValue('8')">8</button>
      <button onclick="appendValue('9')">9</button>
      <button onclick="appendValue('/')">÷</button>

      <button onclick="appendValue('4')">4</button>
      <button onclick="appendValue('5')">5</button>
      <button onclick="appendValue('6')">6</button>
      <button onclick="appendValue('*')">×</button>

      <button onclick="appendValue('1')">1</button>
      <button onclick="appendValue('2')">2</button>
      <button onclick="appendValue('3')">3</button>
      <button onclick="appendValue('-')">−</button>

      <button onclick="appendValue('0')">0</button>
      <button onclick="appendValue('.')">.</button>
      <button class="clear" onclick="clearDisplay()">C</button>
      <button onclick="appendValue('+')">+</button>

      <button class="equal" onclick="calculate()">=</button>
    </div>
  </div>

  <script>
    function appendValue(value) {
      document.getElementById("display").value += value;
    }

    function clearDisplay() {
      document.getElementById("display").value = "";
    }

    function calculate() {
      const display = document.getElementById("display");
      try {
        display.value = eval(display.value);
      } catch {
        display.value = "Fehler";
      }
    }
  </script>

        
    </body>
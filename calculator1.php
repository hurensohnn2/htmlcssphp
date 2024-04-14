<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .display {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
            text-align: right;
            font-size: 20px;
        }
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        .button {
            padding: 20px;
            border-radius: 4px;
            border: 1px solid #ddd;
            text-align: center;
            cursor: pointer;
            font-size: 18px;
        }
        .button:hover {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form method="post">
            <input type="text" class="display" name="display" readonly>
            <div class="buttons">
                <div class="button">1</div>
                <div class="button">2</div>
                <div class="button">3</div>
                <div class="button">+</div>
                <div class="button">4</div>
                <div class="button">5</div>
                <div class="button">6</div>
                <div class="button">-</div>
                <div class="button">7</div>
                <div class="button">8</div>
                <div class="button">9</div>
                <div class="button">*</div>
                <div class="button">.</div>
                <div class="button">0</div>
                <div class="button">=</div>
                <div class="button">/</div>
            </div>
        </form>
    </div>
</body>
</html>



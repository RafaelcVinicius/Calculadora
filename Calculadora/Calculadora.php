<html>
    <head>
        <title>cal</title>
        <script type="text/javascript" src="assets/javascript.js"></script>
        <link rel="stylesheet" href="assets/style.css" />
    </head>
    <body>
<div class="container">  
    <div class="cal">
        <form method="POST"  name="form"> 
            <input class="display up" autocomplete="off" name="sup" readonly /><br />
            <input class="display down" autocomplete="off" name="display" value="0"  readonly /><br />
        </form>

        <table>
            <tr>
                <td> <input type="button" class="btn o" value="C" onclick="clean()" /></td>
                <td> <input type="button" class="btn o n" value="<=" onclick="backspace()" /></td>
                <td> <input type="button" class="btn o n" value="%" onclick="insert('di')" /></td>
                <td> <input type="button" class="btn o n" value="÷" onclick="insert('/')" /></td>
            </tr>
            <tr>
                <td> <input type="button" class="btn" value="7" onclick="insert('7')" /></td>
                <td> <input type="button" class="btn" value="8" onclick="insert('8')" /></td>
                <td> <input type="button" class="btn" value="9" onclick="insert('9')" /></td>
                <td> <input type="button" class="btn o n" value="x" onclick="insert('*')" /></td>
            </tr>
            <tr>
                <td> <input type="button" class="btn" value="4" onclick="insert('4')" /></td>
                <td> <input type="button" class="btn" value="5" onclick="insert('5')" /></td>
                <td> <input type="button" class="btn" value="6" onclick="insert('6')" /></td>
                <td> <input type="button" class="btn o n" value="-" onclick="insert('-')" /></td>
            </tr>
            <tr>
                <td> <input type="button" class="btn" value="1" onclick="insert('1')" /></td>
                <td> <input type="button" class="btn" value="2" onclick="insert('2')" /></td>
                <td> <input type="button" class="btn" value="3" onclick="insert('3')" /></td>
                <td> <input type="button" class="btn o n" value="+" onclick="insert('+')" /></td>
            </tr>
            <tr>
                <td> <input type="button" class="btn" value="00" onclick="insert('00')" /></td>
                <td> <input type="button" class="btn" value="0" onclick="insert('0')" /></td>
                <td> <input type="button" class="btn n" value="." onclick="insert('.')" /></td>
                <td> <input type="button" class="btn o n" value="=" onclick="igual('=')" /></td>
            </tr>
        </table>
    </div>

</div>
    </body>

</html>
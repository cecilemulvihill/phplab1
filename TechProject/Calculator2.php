<html>
<head>
<title>Calculator</title>



<script langauge="javascript" type="text/javascript">
function subTotal() {
var x = 1000;
var y = 2000;

if (document.getElementById("basicProgram").checked) {
document.calculator.total.value = x;

} else if (document.getElementById("proProgram").checked) {
document.calculator.total.value = y;
}
}

function calcDisc() {
var subTotal = document.calculator.total.value;
var discTotal = ((subTotal/100)*10);
document.calculator.discount.value = discTotal;
}

function calcTotal() {
var subTotal = document.calculator.total.value;
var discTotal = document.calculator.discount.value;
var wholeTotal = (subTotal - discTotal);
document.calculator.wholeTotal.value = wholeTotal;
}


</script>
</head>

<body>
        <form name="calculator">
                    
            <br />
        <input type="radio" name="programType" id="basicProgram" value="Basic" />Basic
        <input type="radio" name="programType" id="proProgram" value="Pro" checked />Pro
        
        <br />
        
        Subtotal: <input type="text" name="total">
        <br />
        <input type="button" value="Subtotal" onclick="javascript:subTotal();">
        <br />
        
        Discount:<input type="text" name="discount">
        <br />
        <input type="button" value="Discount" onclick="javascript:calcDisc();">
        <br />
        
        Total:<input type="text" name="wholeTotal">
        <br />
        <input type="button" value="Total" onclick="javascript:calcTotal();">
    </form>
          
</body>

</html>
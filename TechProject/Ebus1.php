<html>
<head>
<title>Calculator</title>

<script langauge="javascript" type="text/javascript">
function calcSub() {
var x = 1000;
var y = 2000;
var z = 3000;

if (document.getElementById("basicProgram").checked) {
document.calculator.total.value = x;

} else if (document.getElementById("proProgram").checked) {
document.calculator.total.value = y;

} else if (document.getElementbyId("Immersive").checked) {
document.calculator.total.value = z;
}
}

function calcDisc() {
var subTotal = document.calculator.total.value;
var discTotal = ((subTotal/100)*10);
document.calculator.discount.value = discTotal;
}

function calcVat() {
var subTotal = document.calculator.total.value;
var vatTotal = (((subTotal - ((subTotal/100)*10))/100) * 20);
document.calculator.vat.value = vatTotal;
}

function calcTotal() {
var subTotal = document.calculator.total.value;
var discTotal = document.calculator.discount.value;
var vatTotal = document.calculator.vat.value;
var wholeTotal = (subTotal - discTotal) + (vatTotal);
document.calculator.wholeTotal.value = wholeTotal;
}

//function calcDispVatTotalDisc()



</script>
</head>

<body>
        <form name="calculator">
                    
            <br />
            <h3>Select a Consulting option</h3>
        <input type="radio" name="programType" id="basicProgram" value="Basic" />Basic
        <br />
        <input type="radio" name="programType" id="proProgram" value="Pro" checked />Pro
        <br />
        <input type="radio" name="programType" id="immersive" value="immersiveEx" checked/>ImmersiveEx
        
        <br />
        <h3>Calculation</h3>
        
        Subtotal: <input type="text" name="total">
        <br />
        <input type="button" value="Subtotal" onclick="javascript:calcSub();">
        <br />
        
        Discount:<input type="text" name="discount">
        <br />
        <input type="button" value="Discount" onclick="javascript:calcDisc();">
        <br />
        
        Vat:<input type="text" name="vat">
        <br />
        <input type="button" value="vat" onclick="javascript:calcVat();">
        
        Total:<input type="text" name="wholeTotal">
        <br />
        <input type="button" value="Total" onclick="javascript:calcTotal();">
        
    </form>
          
</body>

</html>
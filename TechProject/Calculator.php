
<html>
    
<head>
    
<title>Calculator</title>

<script language="javascript" type="text/javascript">   
function calcSub() {
    //creating variables fro the prices all the prices here
    //var b = 1000;
    //var atr = 2000;
    //var ie = 3000;
    //var bothb = db + (db * 0.2);
    //var bothatr = datr + (datr * 0.2);
    //var bothie = die + (die * 0.2);    
        
If (document.getElementById("blockchain").checked) {
    //Checking is the blockchain package checked
    document.calculator.subTotal.value = ("1000");  
    
 //}  else if (document.getElementById("blockchain").checked) {
 //   return blocksSub;
 //       document.calculator.subTotal.value
 //       document.getElementById("subTotal").innerHTML = calcSub(1000);
    
}  else if (document.getElementById("autonomous").checked) {
    //Checking is the autonomous things package checked
    document.calculator.subTotal.value = ("2000")
    
}  else if (document.getElementById("immersive").checked) {
    //Checking is the immersive package checked
    document.calculator.subTotal.value = ("3000")
}
}
</script>
    
<script language="javascript" type="text/javascript">
function calcDisVatTotal() {
    
    var totalb = (1000 - (1000 * 0.1)) + ((1000 - (1000 * 0.1))* 0.2) 
    var totalatr = (2000 - (2000 * 0.1)) + ((2000 - (2000 * 0.1))* 0.2)
    var totalie = (3000 - (3000 * 0.1)) + ((3000 - (3000 * 0.1))* 0.2)

If (document.getElementById("blockchainTotal").checked) {
    //the total price once the discount and vat are applied to the blockchain package
    document.calculator.total.value = totalb;
    
} else if (document.getElementById("autonomousTotal").checked) {
    //the total price once the discount and vat have been applied to the autonomous package
    document.calculator.total.value = totalatr;
    
} else if (document.getElementById("immersiveTotal").checked) {
    //the total once both the discount and vat have been applied to the immersive package
    document.calculator.total.value = totalie
}
}
</script>

</head>


<body>
    
    <form name="calculator">
        <h5>Calculator</h5>  
    <br />   
    <input type="radio" name="programType" id="blockchain" value="Blockchain"/>Blockchain @ €1000
    <br />
    <input type="radio" name="programType" id="autonomous" value="autonomous"/>Autonomous Things (Robots) @ €2000
    <br/>
    <input type="radio" name="programType" id="immersive" value="immersive"/>Immersive Experience @ €3000    
    <br />
    
    Sub Total: <input type="text" name="subTotal"> 
       
    <!-- <p id="blockchain">Sub Total</p> 
    <output>subtotal:</output>
     <p id="subTotal"></p>
    <p id="blockchain"></p> -->
        
    <br />
    Online Discount : <input type="text" name="discount">
    <br />
    VAT: <input type="text" name="vat">
    <br />
    Your total price is : <input type="text" name="total">
    <br />   
    
    <input type="button" value="Submit" onclick="javascrpt:packageTotal();">
    
    </form>
    
</body>
</html>

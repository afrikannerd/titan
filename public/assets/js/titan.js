/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function XMLHTTPRequest()
{
    var xml;
    if(window.XMLHttpRequest)
    {
        xml = new XMLHttpRequest();
    }
    else
    {
       xml = new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    return xml;
}



function AddProduct()
{
    var xml = new XMLHTTPRequest();
    var prod = document.getElementById("product").value;
    var cat = document.getElementById("prod-cat").value;
    var price = document.getElementById("price").value;
    var saleprice = document.getElementById("sale-price").value;
    var quantity = document.getElementById("prod-quantity").value;
    var desc = document.getElementById("prod-desc").value;
    var url = "../../data-router.php";
    var data = "prod="+prod+"&cat="+cat+"&price="+price+"&saleprice="+saleprice+"&quantity="+quantity+"&desc="+desc;
    xml.open("POST",url,true);
    xml.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xml.onreadystatechange = function()
    {
        if(xml.readyState==4&&xml.status==200)
        {
            var resp = xml.responseText;
            document.getElementById("resp").innerHTML = resp;
            var prod = document.getElementById("product").value = '';
            
            var price = document.getElementById("price").value = '';
            var saleprice = document.getElementById("sale-price").value = '';
            var quantity = document.getElementById("prod-quantity").value = '';
            var desc = document.getElementById("prod-desc").value = '';
        }
    }
    
    if(xml.send(data))
    {
        document.getElementById("resp").innerHTML = "<div class='alert alert-info'><strong>processing...</strong></div>";
    }else{
        document.getElementById("resp").innerHTML = "<div class='alert alert-warning'><strong>processing...</strong></div>";
    }
    
}
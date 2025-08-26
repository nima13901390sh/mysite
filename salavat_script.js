function ezafeh(){
    var x= document.getElementById('demo').value;
    console.log(x);
    if(x>=0){
        var y=x+1;
        document.getElementById('demo').innerHTML=y;
    }
}

function kamkardan(){
    var z = document.getElementById('demo').value;
    console.log(z);
    
    if(z>0){
        var e = z-1;
        document.getElementById('demo').innerHTML=e;
    }
}
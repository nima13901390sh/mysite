// const salavat_value=document.getElementById('demo').textContent;
// console.log(salavat_value);


// if(new_salavat_value_1 > 0){
    
// }
function kamkardan(){
    const salavat_value=document.getElementById('demo').textContent;
    const new_salavat_value= + salavat_value;
    let correct_value= new_salavat_value - 1 ;
    var  x= document.getElementById('demo');
    x.textContent=correct_value; 

}
const salavat_value_1=document.getElementById('demo').textContent;
const new_salavat_value_1= + salavat_value_1;
console.log(salavat_value_1);
// if(new_salavat_value_1 > 0){
//     const control_value=document.getElementById('demo2');
//     control_value.addEventListener(onclick,kamkardan());
// }
function ezafehkardan(){
    const salavat_value=document.getElementById('demo').textContent;
    const new_salavat_value= + salavat_value;
    let correct_value= new_salavat_value + 1 ;
    var  x= document.getElementById('demo');
    x.textContent=correct_value; 

}
function reset_function (){
    const salavat_value=document.getElementById('demo').textContent;
    const new_salavat_value= + salavat_value;
    let correct_value= 0 ;
    var  x= document.getElementById('demo');
    x.textContent=correct_value; 
}
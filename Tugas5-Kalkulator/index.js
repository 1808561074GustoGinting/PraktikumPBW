function hitung(){
var formcalc = document.calc;
var bil1=eval(formcalc.bil1.value);
var bil2=eval(formcalc.bil2.value);
var pil= formcalc.opt.value;
if (pil == "tambah") {
var z = bil1 + bil2;
 }else if (pil == "kurang") {
var z = bil1 - bil2;
 } else if (pil == "kali") {
var z = bil1 * bil2;
 } else if (pil == "bagi") {
var z = bil1 / bil2;
 }
 formcalc.hasil.value = z;
 formcalc.bil1.value = "";
 formcalc.bil2.value = "";
}
function resetForm(){
document.calc.reset();
}

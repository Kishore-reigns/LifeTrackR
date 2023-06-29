var pdt = [0, 0, 0, 0, 0, 0];
function pdtclick(n) {
  pdt[n - 1]++;
}

function passover()
{
    localStorage.setItem("items",JSON.stringify(pdt));
}
function chec() {
  document.write(pdt);
}
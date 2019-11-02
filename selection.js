for(var i=0;i<5;i++)
{
  document.querySelectorAll(".like")[i].addEventListener("click",function(){
  document.querySelectorAll(".like")[i].classList.add("btn-danger");
});
document.querySelectorAll(".dislike")[i].addEventListener("click",function(){
document.querySelectorAll(".dislike")[i].classList.add("btn-warning");
});
}

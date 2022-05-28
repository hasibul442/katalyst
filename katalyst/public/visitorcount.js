var counterContainer = document.querySelector(".website-counter");
var visitorCount = localStorage.getItem("page_view");
if(visitorCount){
  visitorCount = Number(visitorCount) + 1 ;
  localStorage.setItem("page_view", visitorCount);
  // counterContainer.innerHTML = visitorCount;
}
else{
   visitorCount = 1;
   localStorage.setItem("page_view", 1);
   counterContainer.innerHTML = visitorCount;
}
counterContainer.innerHTML = 290;
console.log(visitorCount)
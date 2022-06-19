fetch("../list_movies.json").then(function(response) {
  return response.json();
})
.then(function(data) {
 var page="";
 var total=data["data"]["movies"].length;
 var pages=total/9;
 //creation de liste dans html
 for(i=0;i<pages;i++)
 {
   page += '<li class="page-item" data-page="'+i+'"><a class="page-link" >'+(i+1)+'</a></li>';
 }
 //
 document.getElementById("pagination").innerHTML  =page;
var btnpagination= document.getElementsByClassName("page-item");

for(i=0;i<btnpagination.length;i++)
{
  var btn=btnpagination[i];
  btn.addEventListener("click",paginate);

}
//afficher les film selon le nombre de films trouver 
 showfilm(data["data"]["movies"].slice(0,9));
 //stocker liste des films pour utilisation plustard
 window.films=data["data"]["movies"];
})
.catch(function() {
  console.log("Booo");
});

//
var showfilm=function(films){
var text="";
  for(i=0;i<films.length;i++)
    {
      var film=films[i];
      text = text + "<div class='item'>"
      + "<img src='"+film.large_cover_image+"'class='img-responsive img-fluid img' id = '"+film.id +"'>"
             + "<div class='title '>"+film.title+"</div>"
             + "<div class='year fw-lighter '>"+film.year +"</div>"
          +"</div>";
    }
  
    document.getElementById("emplacement1").innerHTML  =  text ;
}


var paginate= function(event)
{
  event.preventDefault();
  var element=event.currentTarget;
  var page=+element.dataset.page;
  showfilm(window.films.slice(page*9,(page+1)*9));
  
}


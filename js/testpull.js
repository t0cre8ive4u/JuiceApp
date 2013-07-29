function showdata()
{
/*request = createRequest();
if (request==null){
	return;
	}
var url = "getalldata.php";
request.open("GET",url,true);
request.onreadystatechange = displayDetails;
request.send(null);
}
function displayDetails() {
  if (request.readyState == 4) {
    if (request.status == 200) {
    
      placedata.innerHTML = request.responseHTML;
    }
  }*/
  
  $.get("getalldata.php",function(data){
	$("#placedata").html(data);
  });
}
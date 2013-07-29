function showdatas()
{
request = createRequest();
if (request==null){
	return;
	}
var url = "getalldatas.php";
request.open("GET",url,true);
request.onreadystatechange = displayDetails;
request.send(null);
}
function displayDetails() {
  if (request.readyState == 4) {
    if (request.status == 200) {
    
      placedata.innerHTML = request.responseHTML;
    }
  }
}
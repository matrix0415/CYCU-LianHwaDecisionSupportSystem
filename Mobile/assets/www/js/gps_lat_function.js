function getLocation_lat()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(getlat(position));
   
    }
  else{alert("Geolocation is not supported by this browser.");}
  }
  
function getlat(position)
  {
  return position.coords.latitude;
  }
  

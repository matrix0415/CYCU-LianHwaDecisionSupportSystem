  function getLocation_lon()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(getlon(position));
    }
  else{alert("Geolocation is not supported by this browser.");}
  }
  
  function getlon(position)
  {
  return position.coords.longitude;
  	
  }
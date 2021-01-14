// References Object Array

var ref = [
    {
      name: "Yvette Koffi", 
      testimony: "Nephi is great.",
      contactNumber: 555-555-5555
    },  
    {
      name: "Steve VanOridn",
      testimony: "Nephi is great.",
      contactNumber: 555-555-5555
    },
    {
      name: "Christopher Stobb",
      testimony: "Nephi is great.",
      contactNumber: 555-555-5555
    }
  ];
  var myRef = "References and Testimonials: <ol>";
  for (i = 0; i < ref.length; i++) {
    myRef += "<li>" + ref[i] + "</li>";
  }
  

  myRef += "</ol>";
  
  document.querySelector("#results").innerHTML = myRef;

 
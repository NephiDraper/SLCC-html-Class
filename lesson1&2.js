var name= prompt("Welcome to my site. Please enter your name.");
   var d = new Date();
   var hour =d.getHours();
   function response(){
   debugger
   if(hour >= 5 && hour <=11 ){
       alert("Good Morning "+ name + ", Thank you for reviwing my resume site.")
   }
   else if (hour >=12 && hour <=18) {
       alert("Good Afternoon "+ name + ", Thank you for reviwing my resume site.")
   }
   
   else {
      alert("Good evening "+ name + ", Thank you for reviwing my resume site.")
   }
}//End of function 

response();
// References Array
var references = [
    { name: "Yvette Koffi", testimony: "Nephi is great.", contactNumber: 555-555-5555 },
  
    { name: "Steve VanOridn", testimony: "Nephi is great.", contactNumber: 555-555-5555 },
  
    { name: "Christopher Stobb", testimony: "Nephi is great.", contactNumber: 555-555-5555 }
  ];
  var myRef = "My References are: <ol>";
  for (i = 0; i < references.length; i++) {
    myRef += "<li>" + references[i] + "</li>";
  }

  myRef += "</ol>";
  document.querySelector("#results").innerHTML = myRef;